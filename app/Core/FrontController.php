<?php

namespace Application\Core;

use Application\Core\ErrorHandler;

class FrontController
{

    public function start()
    {
        $resultParseUrl = $this->parseURL();

        $controllerlClass = $resultParseUrl['controllerName'] . 'Controller';
        $controllerlClass = 'Application\\' . $resultParseUrl['controllerDirName'] . '\\' . $controllerlClass;

        if (!class_exists($controllerlClass)) {
            ErrorHandler::printErrorPage404();
        }

        $controller = new $controllerlClass;
        $action = $resultParseUrl['actionName'];

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            ErrorHandler::printErrorPage404();
        }
    }

    // если скрипт вызывают через командную строку, то переменная $_SERVER['REQUEST_URI'] 
    // пустая или отсутствует и обращение к ней напрямую вызывает ошибку
    private function detectCLImode()
    {
        if (php_sapi_name() == "cli") {
            exit();
        }
    }

    private function parseURL()
    {
        $this->detectCLImode();

        $controllerName = 'Quote';
        $redirectPath = $controllerName;
        $actionName = 'getPage';
        $keyController = 1;
        $keyAction = 2;
        // Название папки в которой находятся контроллеры
        $controllerDirName = 'IndexControllers';
              
        $urlParsed = parse_url($_SERVER['REQUEST_URI']);
        $this->validationHost($_SERVER['HTTP_HOST'], $urlParsed['path']);
        
        /*
         * Если первый элемент пути указывает на админку, то дальнейший разбор 
         * пути сдвигается на один элемент, чтобы получить контроллер и метод 
         * админки, а не основного приложения
         */
        $routes = explode('/', $urlParsed['path']);
        
        if ($routes[1] === 'admin') {
            $controllerName = 'Quotes';
            $redirectPath = 'admin/quotes';
            $keyController = 2;
            $keyAction = 3;
            $controllerDirName = 'AdminControllers';
        }

        if (!empty($routes[$keyController])) {

            // делает первую блукву прописной, остальные строчными, потому что 
            // так выглядят названия соответствующих классов и файлов, например AuthModel
            $controllerName = ucfirst(strtolower($routes[$keyController]));
        } else {
            // Если в пути не передано имя контроллера, то произойдет перенаправление
            // на страницу по ссылке в которой уже будет подставлено имя контроллера
            // $this->goToPage($redirectPath);
        }

        if (!empty($routes[$keyAction])) {

            $actionName = strtolower($routes[$keyAction]);
        }

        return array(
            'controllerName' => $controllerName,
            'actionName' => $actionName,
            'controllerDirName' => $controllerDirName
        );
    }

    // переходит на переданную страницу
    private function goToPage($defaultPage)
    {
        $url = 'Location: /' . strtolower($defaultPage) . '/';
        header($url);
        // останавливает скрипт, чтобы не было неожиданностей
        exit();
    }

    // проверяет есть ли этот домен в белом списке разрешенных доменов
    private function validationHost($host, $path)
    {
        $config = Config::getInstance();
        $hosts = $config->getHostsArray();

        if (array_search($host, $hosts) === FALSE) {           
            $link = 'http://' . $hosts[0] . $path;
            header("HTTP/1.1 301 Moved Permanently");
            header('Location: ' . $link);
            exit;
        }
        
        return true;
    }

}

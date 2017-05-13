<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58c5ce2a747eaa18878bc78d7ca97c65
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Application\\Controllers\\AdminController' => __DIR__ . '/../..' . '/app/Controllers/AdminController.php',
        'Application\\Controllers\\AuthController' => __DIR__ . '/../..' . '/app/Controllers/AuthController.php',
        'Application\\Controllers\\OfferController' => __DIR__ . '/../..' . '/app/Controllers/OfferController.php',
        'Application\\Controllers\\QuotesController' => __DIR__ . '/../..' . '/app/Controllers/QuotesController.php',
        'Application\\Controllers\\RandomController' => __DIR__ . '/../..' . '/app/Controllers/RandomController.php',
        'Application\\Core\\Controller' => __DIR__ . '/../..' . '/app/Core/Controller.php',
        'Application\\Core\\Model' => __DIR__ . '/../..' . '/app/Core/Model.php',
        'Application\\Core\\Request' => __DIR__ . '/../..' . '/app/Core/Request.php',
        'Application\\Core\\Route' => __DIR__ . '/../..' . '/app/Core/Route.php',
        'Application\\Core\\View' => __DIR__ . '/../..' . '/app/Core/View.php',
        'Application\\Models\\AdminModel' => __DIR__ . '/../..' . '/app/Models/AdminModel.php',
        'Application\\Models\\AuthModel' => __DIR__ . '/../..' . '/app/Models/AuthModel.php',
        'Application\\Models\\ConfigModel' => __DIR__ . '/../..' . '/app/Models/ConfigModel.php',
        'Application\\Models\\MysqlModel' => __DIR__ . '/../..' . '/app/Models/MysqlModel.php',
        'Application\\Models\\OfferModel' => __DIR__ . '/../..' . '/app/Models/OfferModel.php',
        'Application\\Models\\QuotesModel' => __DIR__ . '/../..' . '/app/Models/QuotesModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58c5ce2a747eaa18878bc78d7ca97c65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58c5ce2a747eaa18878bc78d7ca97c65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58c5ce2a747eaa18878bc78d7ca97c65::$classMap;

        }, null, ClassLoader::class);
    }
}

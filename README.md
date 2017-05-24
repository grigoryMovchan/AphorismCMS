## Описания
Сборник цитаты о холостом образе жизни

В изначальном виде текст тяжело читать. Парсер разбирает строку на цитаты и авторов. После чего их можно представить в любом удобном виде, реализовать фильтр по авторам, импортировать в БД.

[Результат в гуглдок](https://docs.google.com/document/d/1kA-yRMTNnxF_-qa04zlY7m_Xd2C0gMlArkii-fHlEDw/edit?usp=sharing)

[Исходный текст](/support_scripts/doc/quotes.txt)

папка [/support_scripts](/support_scripts) содержит то с чего все начиналось - парсер, перенос JSON в MySQL, исходный материал, представление

## TODO
- [x] На главной появляется случайная цитата
- [x] Получение списка всех цитат
- [x] Фильтр по авторам 
- [x] Добавить автора
- [x] Удалить автора
- [x] Редактировать имя автора
- [x] Любой может предложить цитату для публикации
- [x] Просмотр комментариев цитаты
- [x] Добавить комментарий к цитате
- [x] Удалить комментарий к цитате
- [x] Отображение количества комментариев на превью
- [x] Помимо авторства должна быть графа для указания источника (книга, статья, фильм)
- [x] В списке со всеми цитатами необходимо разместить якорные ссылки для каждой цитаты
- [x] Управление с клавиатуры - стрелки вперед/назад, показать новую случайную цитату
- [x] Подсказка, что есть управление с клавиатуры
- [x] Админка
- [x] Добавить цитату
- [x] Удалить цитату
- [x] Отредактировать цитату
- [x] Отредактировать предложку
- [x] Удалить предложку
- [x] Одобрить предложку
- [ ] Капча для защиты от спама
- [ ] Репост в ВК
- [ ] Исправить вёрстку, выравнивание по центру должно быть только на странице со случайной цитатой. Футер не должен уезжать за пределы экрана, если ещё есть место.
- [ ] Заглушка для ошибок, чтобы скрыть их от пользователя
- [ ] Запретить поисковикам индексировать админку

### Отменены

Без регистрации не имеют смысла, а в этом проекте в ней нет особого смысла.

- [ ] Лайки, привязанные к кукам или ВК
- [ ] Подписка на новые комментарии к цитате по эмейлу
- [ ] Подписка на новые цитаты по эмейлу
- [ ] AJAX листание цитат (передумал, тогда не получится просто скопировать ссылку на цитату из адресной строки)

Количество записей в таблице с id кук будет увеличиваться от каждого уникального захода. Такая функция имеет смысл только для зарегистрированных пользователей, но её профит сомнителен, а реализация трудоемкая.

- [ ] Случайные цитаты не должны повторятся, для этого можно записывать id пролистанной цитаты в куки
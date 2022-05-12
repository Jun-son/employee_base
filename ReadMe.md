1.    Задача
Для ведения учета информации о сотрудниках работающих в отделе необходимо реализовать инструмент «база сотрудников», который должен содержать следующую функциональность:
- 1.1.       Создание нового сотрудника с заполнением используемых у вас доп. атрибутов.
- 1.2.       Просмотр карточки найденного сотрудника. Отображение полной информации о сотруднике и всех его атрибутах.
Список необходимых атрибутов для хранения в базе:
·         ФИО
·         Должность (должна соответствовать одному из вариантов: специалист, эксперт, супервайзер, руководитель)
·         Фото (опционально, если сможете)
·         дата рождения
·         дата трудоустройства
·         к/т
·         email
·         активность (для определения работает сотрудник, или уволен)
·         + можете дополнить своими вариантами, которые посчитаете нужными.
- 1.3.       Редактирование атрибутов сотрудника из карточки. Можно сделать редактирование через отдельную форму, или по клику на атрибут прямо в карточке сотрудника.
- 1.4.       Увольнение сотрудника. Отдельная кнопка в карточке, которая управляет атрибутом активности сотрудника.
- 1.5.       Поиск сотрудника. Возможность найти сотрудника в базе сотрудников по ФИО. Текстовый инпут, в который вводится строка поиска. Может быть реализован посредством авто-дополнения, или по нажатию на кнопку.
- 1.6.       Отображение статистики. На отдельной странице выводим кол-во работающих (не уволенных) сотрудников в базе, для каждой из имеющихся в вашей базе должностей, на текущий момент. Пример таблицы:
Должность
Кол-во активных сотрудников
Специалист
15
Эксперт
10
…
…

 
2.    Требования к реализации
2.1.       Проект обязательно должен запускаться через docker compose и работать в docker.
2.2.       При разработке обязательно придерживаемся стека: PHP, CSS, HTML, JS, jQuery
2.3.       Реализация взаимодействия frontend и backend частей должна быть построена через Ajax запросы. На backend должна быть единая точка входа (php скрипт – роутер) которой должен обрабатывать все клиентские запросы. Этот скрипт не должен включать в себя всю backend логику приложения, а только перенаправлять запрос в нужное место. Саму backend логику стоит разбить по отдельным классам/файлам/функциями.
2.4.       В качестве базы данных для хранения рекомендуем (но не настаиваем) использовать: MySQL, MariaDB, или PostgreSQL
2.5.       Дополнительным плюсом будет использование в проекте bootstrap
 
3.    Доп. информация.
3.1.       При оценке особое внимание будет уделено качеству кода (форматирование, комментарии, именование переменных, используемые конструкции)
3.2.             Особое внимание уделите структуре БД, которая будет оцениваться отдельно
3.3.       Результат необходимо будет предоставить в следующем формате: архив с проектом, в котором будет ваш код, docker-compose.yml файл (через который будет запускаться ваш проект);
3.4.       В проекте необходимо реализовать скрипт, который будет наполнять БД тестовыми данными (список должностей, набор тестовых сотрудников и их атрибуты)
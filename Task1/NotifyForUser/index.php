<?php

require_once 'classes/User.php';

$john = new User('Иванов Иван Иванович', 'ivanov76@mail.ru', 'male', 44,
    89035204435);
$john->notify('Ооооо тебе доступен контент, так как больше 18 лет!');

$helen = new User('Иванова Елена Алексеевна', 'ivanova2004@mail.ru', 'female', 16);
$helen->notify('Ооооо тебе доступен контент, так как больше 18 лет!');


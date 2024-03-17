# Валидатор мобильных номеров России

Данный валидатор принимает на вход строку и
проверяет является ли она мобильным номеров телефона на территории РФ.

## Требования

PHP 7.4

## Установка



## Использование

````php
<?php
use src\PhoneValidatorRU;$phoneNumber = '8 (925) 122 22 11'; // Номер страницы

$phoneValidatorRU = new PhoneValidatorRU(); // Создание экземпляра
$checkIsPhoneNumber = $phoneValidatorRU->validate($phoneNumber); // Вызов метода валидации

if ($checkIsPhoneNumber) { // Последущее использование
    ...
}
````

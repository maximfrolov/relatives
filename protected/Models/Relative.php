<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Relative Класс родственник
 * @package App\Models
 *
 * @property $first_name
 * @property $middle_name
 * @property $last_name
 * @property $birth
 * @property $death
 * @property $address
 * @property $phone
 * @property $email
 * @property $social
 */
class Relative
    extends Model
{
    protected static $schema = [
        'table' => 'relatives',  // таблицу можно не описывать, т.к. ее имя отличается от имени класса только буквой "s"
        'columns' => [
            'first_name' => ['type' => 'string'],
            'middle_name' => ['type' => 'string'],
            'last_name' => ['type' => 'string'],
            'birth' => ['type' => 'date'],
            'death' => ['type' => 'date'],
            'address' => ['type' => 'string'],
            'phone' => ['type' => 'int'],
            'email' => ['type' => 'string'],
            'social' => ['type' => 'string'],
        ],
        'relations' => [
            'city' => ['type' => self::BELONGS_TO, 'model' => City::class],
        ],
    ];
}
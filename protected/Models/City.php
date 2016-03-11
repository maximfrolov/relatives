<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class City
 * @package App\Models
 *
 * @property $name
 */
class City
    extends Model
{
    protected static $schema = [
        'table' => 'cities',
        'columns' => [
            'name' => ['type' =>'string'],
        ],
    ];
}
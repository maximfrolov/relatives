<?php

namespace App\Controllers;

use App\Models\City;
use App\Models\Relative;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        /*$relative = new Relative();
        $relative->first_name = 'Максим';
        $relative->middle_name = 'Валентинович';
        $relative->last_name = 'Фролов';
        $relative->birth = '1974-06-10';
        $relative->address = '620010 г.Екатеринбург, ул.Славянская, д.56, кв.1';
        $relative->phone = '+7 (912) 6097000';
        $relative->email = 'frolov-max74@yandex.ru';
        $relative->social = 'https://vk.com/id155953367';
        $relative->save();*/

        /*$city = new City();
        $city->name = 'Екатеринбург';
        $city->save();
        die;*/

        $this->data->relative = Relative::findByPK(1);
    }

}
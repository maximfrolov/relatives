<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1457685977_createCities
    extends Migration
{

    public function up()
    {
        $this->createTable('cities', [
            'name' => ['type' =>'string'],
        ]);
        $this->addColumn('relatives', [
            '__city_id' => ['type' => 'link'],
        ]);
    }

    public function down()
    {
        $this->dropColumn('relatives', '__city_id');
        $this->dropTable('cities');
    }
    
}
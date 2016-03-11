<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1457635196_createRelatives
    extends Migration
{

    public function up()
    {
        $this->createTable('relatives', [
            'first_name' => ['type' => 'string'],
            'middle_name' => ['type' => 'string'],
            'last_name' => ['type' => 'string'],
            'birth' => ['type' => 'date'],
            'death' => ['type' => 'date'],
            'address' => ['type' => 'string'],
            'phone' => ['type' => 'int'],
            'email' => ['type' => 'string'],
            'social' => ['type' => 'string'],
        ]);
    }

    public function down()
    {
        $this->dropTable('relatives');
    }
    
}
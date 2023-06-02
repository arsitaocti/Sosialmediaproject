<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ColomnStatus extends Migration
{
    public function up()
    {
        $fields = [
            "status" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'status');
    }
}

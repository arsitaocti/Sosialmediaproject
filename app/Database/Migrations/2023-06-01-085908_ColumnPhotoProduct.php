<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ColumnPhotoProduct extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
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

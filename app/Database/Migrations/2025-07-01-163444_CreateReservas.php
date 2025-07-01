<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReservas extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'usuario_id' => [
            'type' => 'INT',
            'unsigned' => true,
        ],
        'espaco_id' => [
            'type' => 'INT',
            'unsigned' => true,
        ],
        'data' => [
            'type' => 'DATE',
        ],
        'hora_inicio' => [
            'type' => 'TIME',
        ],
        'hora_fim' => [
            'type' => 'TIME',
        ],
        'atividade' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('reservas');
}


    public function down()
    {
        //
    }
}

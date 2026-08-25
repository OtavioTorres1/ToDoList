<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */

 public function run()
   {
    
         DB::table ('tb_tarefa')->insert([
        ['tituloTarefa' =>'n sei', 'descTarefa' => 'n sei tbm', 'statusTarefa' => 'Concluida', 'prioridadeTarefa' => 'Alta', 'prazoTarefa' =>'2027-05-05', 'tb_usuario_id' => '1'],
        ['tituloTarefa' =>'Uma ai', 'descTarefa' => 'Nada a descrever', 'statusTarefa' => 'Pendente', 'prioridadeTarefa' => 'Baixa', 'prazoTarefa' =>'2027-03-05', 'tb_usuario_id' => '2'],
        ]);
    }

}
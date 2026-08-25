<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */

 public function run()
   {
    
         DB::table ('tb_comentario')->insert([
        ['conteudoComentario' =>'n sei', 'dataComentario' =>'2026-05-05', 'tb_usuario_id' => '1', 'tb_tarefa_id' => '1'],
        ['conteudoComentario' =>'n sei não cara', 'dataComentario' =>'2026-06-12', 'tb_usuario_id' => '2', 'tb_tarefa_id' => '2'],
        ]);
    }

}
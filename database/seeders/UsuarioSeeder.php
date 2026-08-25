<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */

 public function run()
   {
    
         DB::table ('tb_usuario')->insert([
        ['nomeUsuario' =>'otavio', 'emailUsuario' => 'otavio@gmail', 'senhaUsuario' => '1234', 'datanascUsuario' => '2008-05-05', 'cepUsuario' =>'128912387', 'logradouroUsuario' => 'Rua sla', 'numlogradouroUsuario' => '123', 'complementoUsuario' => 'sla', 'bairroUsuario' => 'Jd Sao Paulo', 'cidadeUsuario' => 'Sao Paulo', 'estadoUsuario' => 'Sp'],
        ['nomeUsuario' =>'natan', 'emailUsuario' => 'natan@gmail', 'senhaUsuario' => '1234454', 'datanascUsuario' => '2008-12-12', 'cepUsuario' => '1324289124324232343387', 'logradouroUsuario' => 'SLa', 'numlogradouroUsuario' => '123', 'complementoUsuario' => 'sla', 'bairroUsuario' => 'Sla', 'cidadeUsuario' => 'Acre', 'estadoUsuario' => 'Sp'],
        ]);
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    use HasFactory;

    protected $table ='tb_usuario';

public $fillable = ['nomeUsuario', 'emailUsuario', 'senhaUsuario', 'datanascUsuario', 'cepUsuario', 'logradouroUsuario', 'numlogradouroUsuario', 'complementoUsuario', 'bairroUsuario', 'cidadeUsuario', 'estadoUsuario'];
}

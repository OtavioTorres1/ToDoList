<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    use HasFactory;

protected $table ='tb_tarefa';

public $fillable = ['tituloTarefa', 'descTarefa', 'statusTarefa', 'prioridadeTarefa', 'prazoTarefa', 'tb_usuario_id'];

//public $timestamps = false;
}
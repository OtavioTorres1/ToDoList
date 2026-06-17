<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioTarefa extends Model
{
    use HasFactory;

protected $table ='tb_comentario';

public $fillable = ['conteudoComentario', 'dataComentario', 'tb_usuario_id', 'tb_tarefa_id'];

}

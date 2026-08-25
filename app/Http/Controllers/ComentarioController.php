<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarefas;
use App\Models\PerfilUsuario;
use App\Models\ComentarioTarefa;

class ComentarioController extends Controller
{
    //

        public function index()
    {
        //
    $comentario = ComentarioTarefa::latest('id')->first();
            $tarefas = Tarefas::all();
            $totalTarefas = Tarefas::where('statusTarefa', 'Em andamento')->count();

            return view('home', compact('tarefas', 'totalTarefas', 'usuario'));
    }

        public function store(Request $request)
    {
        //
            ComentarioTarefa::create([
        'conteudoComentario' => $request->conteudoComentario,
        'dataComentario' => $request->dataComentario,
        'tb_usuario_id' => $request->tb_usuario_id,
        'tb_tarefa_id' => $request->tb_tarefa_id
    ]);
    
    return redirect()->route('home');
    }

            public function storeApi(Request $request)
    {
        //
            ComentarioTarefa::create([
        'conteudoComentario' => $request->conteudoComentario,
        'dataComentario' => $request->dataComentario,
        'tb_usuario_id' => $request->tb_usuario_id,
        'tb_tarefa_id' => $request->tb_tarefa_id
    ]);
    
    }
}

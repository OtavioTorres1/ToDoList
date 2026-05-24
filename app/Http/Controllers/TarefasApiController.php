<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefas;

class TarefasApiController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | LISTAR TAREFAS
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $tarefas = Tarefas::all();

        return response()->json($tarefas);
    }

    /*
    |--------------------------------------------------------------------------
    | CRIAR TAREFA
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {

        $tarefa = Tarefas::create([

            'tituloTarefa' => $request->tituloTarefa,
            'descTarefa' => $request->descTarefa,
            'statusTarefa' => $request->statusTarefa,
            'prioridadeTarefa' => $request->prioridadeTarefa,
            'prazoTarefa' => $request->prazoTarefa,
            'tb_usuario_id' => $request->tb_usuario_id

        ]);

        return response()->json([

            'mensagem' => 'Tarefa criada com sucesso',
            'tarefa' => $tarefa

        ], 201);
    }

    /*
    |--------------------------------------------------------------------------
    | ATUALIZAR TAREFA
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {

        $tarefa = Tarefas::findOrFail($id);

        $tarefa->update([

            'tituloTarefa' => $request->tituloTarefa,
            'descTarefa' => $request->descTarefa,
            'statusTarefa' => $request->statusTarefa,
            'prioridadeTarefa' => $request->prioridadeTarefa,
            'prazoTarefa' => $request->prazoTarefa

        ]);

        return response()->json([

            'mensagem' => 'Tarefa atualizada com sucesso',
            'tarefa' => $tarefa

        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | DELETAR TAREFA
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {

        $tarefa = Tarefas::findOrFail($id);

        $tarefa->delete();

        return response()->json([

            'mensagem' => 'Tarefa deletada com sucesso'

        ]);
    }
}
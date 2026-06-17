<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarefas;
use App\Models\PerfilUsuario;
use App\Models\ComentarioTarefa;


class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //pegar dados da tarefa e usuario para a home:
    public function index()
    {
        //
    $usuario = PerfilUsuario::latest('id')->first();
            $tarefas = Tarefas::all();
            $totalTarefas = Tarefas::where('statusTarefa', 'Em andamento')->count();

            return view('home', compact('tarefas', 'totalTarefas', 'usuario'));
    }

    public function tarefasApi()
    {
        //
            $tarefas = Tarefas::all();

            return $tarefas;
    }

    public function ComentarioTarefa()
    {
        //
            $comentario = ComentarioTarefa::all();

            return $comentario;


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    //cadastrar tarefa
    public function store(Request $request)
    {
        //
            Tarefas::create([
        'tituloTarefa' => $request->tituloTarefa,
        'descTarefa' => $request->descTarefa,
        'statusTarefa' => $request->statusTarefa,
        'prioridadeTarefa' => $request->prioridadeTarefa,
        'prazoTarefa' => $request->prazoTarefa,
        'tb_usuario_id' => $request->tb_usuario_id
    ]);
    
    return redirect()->route('home');
    }

        public function storeApi(Request $request)
    {
        //
        $tarefa = new Tarefas();
        $tarefa->tituloTarefa = $request->tituloTarefa;
        $tarefa->descTarefa = $request->descTarefa;
        $tarefa->statusTarefa = $request->statusTarefa;
        $tarefa->prioridadeTarefa = $request->prioridadeTarefa;
        $tarefa->prazoTarefa = $request->prazoTarefa;
        $tarefa->tb_usuario_id = $request->tb_usuario_id;
        $tarefa->created_at = date('Y-m-d H:i:s');
        $tarefa-> updated_at = date('Y-m-d H:i:s');
        $tarefa->save();
    
    }

            public function storeComentario(Request $request)
    {
        //
        $comentario = new ComentarioTarefa();
        $comentario->conteudoComentario = $request->conteudoComentario;
        $comentario->dataComentario = $request->dataComentario;
        $comentario->tb_usuario_id = $request->tb_usuario_id;
        $comentario->tb_tarefa_id = $request->tb_tarefa_id;
        $comentario->created_at = date('Y-m-d H:i:s');
        $comentario-> updated_at = date('Y-m-d H:i:s');
        $comentario->save();
    
    }

            public function storeComentarioApi(Request $request)
    {
        //
        $comentario = new ComentarioTarefa();
        $comentario->conteudoComentario = $request->conteudoComentario;
        $comentario->dataComentario = $request->dataComentario;
        $comentario->tb_usuario_id = $request->tb_usuario_id;
        $comentario->tb_tarefa_id = $request->tb_tarefa_id;
        $comentario->created_at = date('Y-m-d H:i:s');
        $comentario-> updated_at = date('Y-m-d H:i:s');
        $comentario->save();
    
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

    }

    public function updateApi(Request $request, string $id)
    {
        $validarDados = $request->validate([            
            'tituloTarefa'=>'min:3',
            'descTarefa'=>'max:40',
            'statusTarefa'=>'max:40',
            'prioridadeTarefa'=>'max:40',
            'prazoTarefa'=>'max:40',
            'tb_usuario_id'=>'max:40',
        ]);

        $alterarTarefa = Tarefas::findOrFail($id);

        $alterarTarefa -> update($validarDados);

        return response()->json(
            [
                "mensagem" => 'Dados alterados com sucesso',
                "contato" => $alterarTarefa
            ],
            200
        );

    }

       public function updateComentarioApi(Request $request, string $id)
    {
        $validarDados = $request->validate([            
            'conteudoComentario'=>'min:3',
            'dataComentario'=>'max:40',
            'tb_usuario_id'=>'max:40',
            'tb_tarefa_id'=>'max:40',
        ]);

        $alterarComentario = ComentarioTarefa::findOrFail($id);

        $alterarComentario -> update($validarDados);

        return response()->json(
            [
                "mensagem" => 'Dados alterados com sucesso',
                "contato" => $alterarComentario
            ],
            200
        );

    }


    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {

    }

    public function destroyApi(string $id)
    {
        $deletarTarefa = Tarefas::where('id',$id)->delete();

        return response()->json(
            [
                "mensagem" => 'Dados excluídos com sucesso',
                "tb_tarefa" => $deletarTarefa
            ],
            200
        );        
    }

        public function destroyComentarioApi(string $id)
    {
        $deletarComentario = ComentarioTarefa::where('id',$id)->delete();

        return response()->json(
            [
                "mensagem" => 'Dados excluídos com sucesso',
                "tb_comentario" => $deletarComentario
            ],
            200
        );        
    }

}
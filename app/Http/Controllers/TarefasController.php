<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarefas;
use App\Models\PerfilUsuario;


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


    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {

    }

}
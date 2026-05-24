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
    public function index()
    {
        //
    $usuario = PerfilUsuario::latest('id')->first();
            $tarefas = Tarefas::all();
            $totalTarefas = Tarefas::where('statusTarefa', 'Em andamento')->count();

            return view('home', compact('tarefas', 'totalTarefas', 'usuario'));
    }

        public function hoje()
{
    $usuario = PerfilUsuario::latest('id')->first();
            $tarefas = Tarefas::all();
            $totalTarefasC = Tarefas::where('statusTarefa', 'concluida')->count();
            $hojeTarefas = Tarefas::where('prazoTarefa', '2026-05-24');

            return view('hoje.tarefas', compact('tarefas', 'totalTarefasC', 'hojeTarefas', 'residencia'));
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
        $tarefa = Tarefas::findOrFail($id);

        return view('tarefas.editarTarefa', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tarefa = Tarefas::findOrFail($id);

        $tarefa->tituloTarefa = $request->tituloTarefa;
        $tarefa->descTarefa = $request->descTarefa;
        $tarefa->statusTarefa = $request->statusTarefa;
        $tarefa->prioridadeTarefa = $request->prioridadeTarefa;
        $tarefa->prazoTarefa = $request->prazoTarefa;

        $tarefa->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        $tarefas = Tarefas::findOrFail($id);

        $tarefas->delete();

        return redirect()->route('home');
    }
}
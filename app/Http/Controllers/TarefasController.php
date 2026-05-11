<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarefas;

class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tarefas = Tarefas::all();

       return view('home')->with('tarefas', $tarefas);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
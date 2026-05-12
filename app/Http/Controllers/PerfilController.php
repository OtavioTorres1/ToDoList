<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerfilUsuario;
use Illuminate\Support\Facades\Http;

class PerfilController extends Controller
{
    public function index()
    {
        $usuario = PerfilUsuario::latest('id')->first();

        return view('usuario.perfil', compact('usuario'));
    }

public function buscarCep($cep)
{
    $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

    if ($response->successful()) {

        $dados = $response->json();

        if (isset($dados['erro'])) {
            return response()->json([
                'erro' => 'CEP não encontrado'
            ], 404);
        }

        return response()->json($dados);
    }

    return response()->json([
        'erro' => 'Falha ao buscar CEP'
    ], 500);
}

public function update(Request $request, $id)
{
    $usuario = PerfilUsuario::findOrFail($id);

    $usuario->nomeUsuario = $request->nomeUsuario;
    $usuario->emailUsuario = $request->emailUsuario;
    $usuario->datanascUsuario = $request->datanascUsuario;

    if ($request->senhaUsuario) {
        $usuario->senhaUsuario = bcrypt($request->senhaUsuario);
    }

    $usuario->save();

    return redirect()->route('perfil');
}

public function destroy($id)
{
    $usuario = PerfilUsuario::findOrFail($id);

    $usuario->delete();

    return redirect()->route('login');
}

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        PerfilUsuario::create([
            'nomeUsuario' => $request->nomeUsuario,
            'emailUsuario' => $request->emailUsuario,
            'senhaUsuario' => bcrypt($request->senhaUsuario),
            'datanascUsuario' => $request->datanascUsuario
        ]);

        return redirect()->route('login');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

}
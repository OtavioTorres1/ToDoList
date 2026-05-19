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

    public function salvarEtapa1(Request $request)
    {
        session([
            'cadastro' => [
                'nomeUsuario' => $request->nomeUsuario,
                'emailUsuario' => $request->emailUsuario,
                'senhaUsuario' => bcrypt($request->senhaUsuario),
                'datanascUsuario' => $request->datanascUsuario
            ]
        ]);

        return redirect()->route('cep');
    }

    public function finalizarCadastro(Request $request)
    {
        $dados = session('cadastro');

        if (!$dados) {
            return redirect()->route('cadastroForm');
        }

        PerfilUsuario::create([

            'nomeUsuario' => $dados['nomeUsuario'],
            'emailUsuario' => $dados['emailUsuario'],
            'senhaUsuario' => $dados['senhaUsuario'],
            'datanascUsuario' => $dados['datanascUsuario'],

            'cepUsuario' => $request->cepUsuario,
            'logradouroUsuario' => $request->logradouroUsuario,
            'numlogradouroUsuario' => $request->numlogradouroUsuario,
            'complementoUsuario' => $request->complementoUsuario,
            'bairroUsuario' => $request->bairroUsuario,
            'cidadeUsuario' => $request->cidadeUsuario,
            'estadoUsuario' => $request->estadoUsuario,
        ]);

        session()->forget('cadastro');

        return redirect()->route('login');
    }

    public function update(Request $request, $id)
    {
        $usuario = PerfilUsuario::findOrFail($id);

        $usuario->nomeUsuario = $request->nomeUsuario;
        $usuario->emailUsuario = $request->emailUsuario;
        $usuario->datanascUsuario = $request->datanascUsuario;

        $usuario->cepUsuario = $request->cepUsuario;
        $usuario->logradouroUsuario = $request->logradouroUsuario;
        $usuario->numlogradouroUsuario = $request->numlogradouroUsuario;
        $usuario->complementoUsuario = $request->complementoUsuario;
        $usuario->bairroUsuario = $request->bairroUsuario;
        $usuario->cidadeUsuario = $request->cidadeUsuario;
        $usuario->estadoUsuario = $request->estadoUsuario;

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

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }
}
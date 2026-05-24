<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfilUsuario;
use Illuminate\Support\Facades\Http;

class PerfilApiController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | LISTAR USUÁRIOS
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $usuarios = PerfilUsuario::all();

        return response()->json($usuarios);
    }

    /*
    |--------------------------------------------------------------------------
    | BUSCAR USUÁRIO ESPECÍFICO
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $usuario = PerfilUsuario::findOrFail($id);

        return response()->json($usuario);
    }

    /*
    |--------------------------------------------------------------------------
    | CADASTRAR USUÁRIO
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {

        $usuario = PerfilUsuario::create([

            'nomeUsuario' => $request->nomeUsuario,
            'emailUsuario' => $request->emailUsuario,
            'senhaUsuario' => bcrypt($request->senhaUsuario),
            'datanascUsuario' => $request->datanascUsuario,

            'cepUsuario' => $request->cepUsuario,
            'logradouroUsuario' => $request->logradouroUsuario,
            'numlogradouroUsuario' => $request->numlogradouroUsuario,
            'complementoUsuario' => $request->complementoUsuario,
            'bairroUsuario' => $request->bairroUsuario,
            'cidadeUsuario' => $request->cidadeUsuario,
            'estadoUsuario' => $request->estadoUsuario,
        ]);

        return response()->json([

            'mensagem' => 'Usuário cadastrado com sucesso',
            'usuario' => $usuario

        ], 201);
    }

    /*
    |--------------------------------------------------------------------------
    | ATUALIZAR USUÁRIO
    |--------------------------------------------------------------------------
    */

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

        // Atualiza senha somente se preencher
        if($request->senhaUsuario){

            $usuario->senhaUsuario = bcrypt($request->senhaUsuario);

        }

        $usuario->save();

        return response()->json([

            'mensagem' => 'Usuário atualizado com sucesso',
            'usuario' => $usuario

        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | DELETAR USUÁRIO
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {

        $usuario = PerfilUsuario::findOrFail($id);

        $usuario->delete();

        return response()->json([

            'mensagem' => 'Usuário deletado com sucesso'

        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | BUSCAR CEP
    |--------------------------------------------------------------------------
    */

    public function buscarCep($cep)
    {

        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if($response->successful()){

            $dados = $response->json();

            if(isset($dados['erro'])){

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
}
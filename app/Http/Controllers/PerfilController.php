<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerfilUsuario;
use App\Models\Tarefas;
use Illuminate\Support\Facades\Http;

class PerfilController extends Controller
{

//mandar dados para pagina de perfil
    public function index()
    {
        $usuario = PerfilUsuario::latest('id')->first();

        return view('usuario.perfil', compact('usuario'));
    }

        public function indexApi()
    {
        $usuario = PerfilUsuario::latest('id')->first();

        return $usuario;
    }

//mandar dados para pagina de perfil 2
        public function residencia()
{
    $usuario = PerfilUsuario::latest('id')->first();

            return view('usuario.residencia', compact('usuario'));
}


// Cadastro de novo Usuario:
    public function store(Request $request)
    {
        //
            PerfilUsuario::create([
        'nomeUsuario' => $request->nomeUsuario,
        'emailUsuario' => $request->emailUsuario,
        'senhaUsuario' => $request->senhaUsuario,
        'datanascUsuario' => $request->datanascUsuario,
        'cepUsuario' => $request->cepUsuario,
        'logradouroUsuario' => $request->logradouroUsuario,
        'numlogradouroUsuario' => $request->numlogradouroUsuario,
        'complementoUsuario' => $request->complementoUsuario,
        'bairroUsuario' => $request->bairroUsuario,
        'cidadeUsuario' => $request->cidadeUsuario,
        'estadoUsuario' => $request->estadoUsuario
    ]);
    
    return redirect()->route('login');
    }

        public function storeApi(Request $request)
    {
        //
        $usuario = new PerfilUsuario();
        $usuario->nomeUsuario = $request->nomeUsuario;
        $usuario->emailUsuario = $request->emailUsuario;
        $usuario->senhaUsuario = $request->senhaUsuario;
        $usuario->datanascUsuario = $request->datanascUsuario;
        $usuario->cepUsuario = $request->cepUsuario;
        $usuario->logradouroUsuario = $request->logradouroUsuario;
        $usuario->numlogradouroUsuario = $request->numlogradouroUsuario;
        $usuario->complementoUsuario = $request->complementoUsuario;
        $usuario->bairroUsuario = $request->bairroUsuario;
        $usuario->cidadeUsuario = $request->cidadeUsuario;
        $usuario->estadoUsuario = $request->estadoUsuario;
        $usuario->created_at = date('Y-m-d H:i:s');
        $usuario-> updated_at = date('Y-m-d H:i:s');
        $usuario->save();
    
    }

    public function update(Request $request, $id)
    {
 
    }

    public function destroy($id)
    {

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
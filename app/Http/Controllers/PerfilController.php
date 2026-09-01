<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerfilUsuario;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{

//mandar dados para pagina de perfil
    public function index()
    {
        $usuario = User::latest('id')->first();
        // $UsuarioEspecifico = PerfilUsuario::where()->get;

        return view('usuario.perfil', compact('usuario'));
    }

        public function indexApi()
    {
        $usuario = User::latest('id')->first();

        return $usuario;
    }

    public function residencia()
    {
        $usuario = User::latest('id')->first();
        // $UsuarioEspecifico = PerfilUsuario::where()->get;

        return view('usuario.residencia', compact('usuario'));
    }


    public function UsuarioEspecificoApi()
    {
        //
            $listarUsuarioEspecifico= User::where('nomeUsuario', '=', 'Sofiha')->get('id');

            return $listarUsuarioEspecifico;
    
    }
    

// Cadastro de novo Usuario:
    public function store(Request $request)
    {
        //
        $usuario = new User();
        $usuario->name = $request->nomeUsuario;
        $usuario->email = $request->emailUsuario;
        $usuario -> password = Hash::make($request->senhaUsuario);
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
    
    return redirect()->route('login');
    }

        public function storeApi(Request $request)
    {
        //
        $usuario = new User();
        $usuario->name = $request->nomeUsuario;
        $usuario->email = $request->emailUsuario;
        $usuario -> password = Hash::make($request->senhaUsuario);
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
    public function updateApi(Request $request, string $id)
    {
        $validarDados = $request->validate([            
            'nomeUsuario'=>'min:3',
            'emailUsuario'=>'max:40',
            'senhaUsuario'=>'max:40',
            'datanascUsuario'=>'max:40',
            'cepUsuario'=>'max:40',
            'logradouroUsuario'=>'max:40',
            'numlogradouroUsuario'=>'max:40',
            'complementoUsuario'=>'max:40',
            'bairroUsuario'=>'max:40',
            'cidadeUsuario'=>'max:40',
            'estadoUsuario'=>'max:40',
        ]);

        $alterarUsuario = User::findOrFail($id);

        $alterarUsuario -> update($validarDados);

        return response()->json(
            [
                "mensagem" => 'Dados alterados com sucesso',
                "contato" => $alterarUsuario
            ],
            200
        );

    }

    public function destroy($id)
    {

    }

        public function destroyApi(string $id)
    {
        $deletarUsuario = User::where('id',$id)->delete();

        return response()->json(
            [
                "mensagem" => 'Dados excluídos com sucesso',
                "tb_usuario" => $deletarUsuario
            ],
            200
        );        
    }

     public function fazerLogin(Request $request){
        if(!Auth::attempt($request->only(['email','password']))){
            return redirect('login');
        }
            else{
                return redirect('/home');
            }
    }

    public function fazerLogOut(Request $request){
        Auth::logout();
        return redirect('login');
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
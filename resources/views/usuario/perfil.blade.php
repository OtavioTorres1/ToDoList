<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfol do Usuário</title>
        <link rel="stylesheet" href="{{url('css/perfil.css')}}">

</head>
<body>
    @include('layouts.header')

    <main>

                    <div class="fundo">
            <div class="headerPerfil">
                <div>
                    <h1>Perfil de Usuario</h1>
                </div>

                <div class="tiposDeInfos">
                    <a href="">
                        <p style="color: #110c81">informações básicas</p>
                    </a>
                    <a href="">
                       <p style="color: black"> informações de residencia </p>
                    </a>
                </div>
            </div>
            <div class="infosUsuario">
                <div class="pt1">
                    <div>
                    <label>Nome</label>
                    <input type="text" value="{{ $usuario->nomeUsuario }}" readonly>
                </div>

                <div>
                    <label>Email</label>
                    <input type="email" value="{{ $usuario->emailUsuario }}" readonly>
                </div>

                <div>
                    <label>Senha</label>
                    <input type="password" value="{{ $usuario->senhaUsuario }}" readonly>
                </div>

                <div>
                    <label>Data de Nascimento</label>
                    <input type="text" value="{{ $usuario->datanascUsuario }}" readonly>
                </div>
                
            </div>

                <!-- parte editar -->
                <div class="pt1" style="opacity: 0.5;">
                    <div>
                    <label>Novo nome</label>
                    <input type="text" value="{{ $usuario->nomeUsuario }}" readonly>
                </div>

                <div>
                    <label>Novo email</label>
                    <input type="email" value="{{ $usuario->emailUsuario }}" readonly>
                </div>

                <div>
                    <label>Nova senha</label>
                     <input type="password" value="{{ $usuario->senhaUsuario }}" readonly>
                </div>

                <div>
                    <label>Data de Nascimento</label>
                    <input type="text" value="{{ $usuario->datanascUsuario }}" readonly>
                </div>

                </div>
           
            </div>
                 <a href="{{ route('editarUsuario') }}" class="editar-btn">Editar</a>
        </div>

    </main>

    @include('layouts.footer')
</body>
</html>
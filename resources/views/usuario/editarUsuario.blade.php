<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil do usuário</title>
        <link rel="stylesheet" href="{{url('css/perfil.css')}}">
</head>
<body>

    @include('layouts.header')

    <main>

        <div class="fundo">

            <div class="headerPerfil">
                <div>
                    <h1>Editar Perfil de Usuario</h1>
                </div>

            </div>

                    <form action="{{ route('updateUsuario', $usuario->id) }}" method="POST">

    @csrf
    @method('PUT')
    
                <div class="infosUsuario">
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

                <!-- parte editar -->
                <div class="pt1">

                    <div>
                        <label>Nome</label>
                        <input type="text"
                            name="nomeUsuario"
                            value="{{ $usuario->nomeUsuario }}">
                    </div>

                    <div>
                        <label>Email</label>
                        <input type="email"
                            name="emailUsuario"
                            value="{{ $usuario->emailUsuario }}">
                    </div>

                    <div>
                        <label>Senha</label>
                        <input type="password"
                            name="senhaUsuario">
                    </div>

                    <div>
                        <label>Data de Nascimento</label>
                        <input type="text"
                            name="datanascUsuario"
                            value="{{ $usuario->datanascUsuario }}">
                    </div>

                </div>

            </div>

                <button type="submit" class="editar-btn">
                    Confirmar
                </button>
                <a href="{{ route('perfil') }}" class="editar-btn" style="background-color: red;">Cancelar</a>
        </div>
</form>
    </main>

    @include('layouts.footer')

</body>
</html>
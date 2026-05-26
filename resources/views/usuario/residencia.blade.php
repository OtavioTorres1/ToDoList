<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
        <link rel="stylesheet" href="{{url('css/perfil.css')}}">

</head>
<body>
    @include('layouts.header')

 <main>

    <div class="perfil-card">

        <!-- TOPO AZUL -->
        <div class="perfil-topo"></div>

        <!-- FOTO -->
        <a href="">
        <div class="foto-perfil">
            <img src="{{ url('images/user.jpeg') }}" alt="" style="opacity: 0.7">
            <span>Alterar</span>
        </div>
        </a>

        <!-- TÍTULO -->
        <h1>Perfil de Usuario</h1>

        <!-- ABAS -->
        <div class="abas">
            <a href="{{ route('perfil') }}">
                informações básicas
            </a>

            <a href="{{ route('residencia') }}" class="ativa">
                informações de residencia
            </a>
        </div>

        <!-- INFORMAÇÕES -->
        <div class="infos-grid">

            <div class="campo">
                <label>Rua:</label>
                <p>{{ $usuario->logradouroUsuario }}</p>
            </div>

            <div class="campo">
                <label>Número:</label>
                <p>{{ $usuario->numlogradouroUsuario }}</p>
            </div>

            <div class="campo">
                <label>Bairro:</label>
                <p>{{ $usuario->bairroUsuario}}</p>
            </div>

            <div class="campo">
                <label>Cidade:</label>
                <p>{{ $usuario->cidadeUsuario}} ({{ $usuario->estadoUsuario}})</p>
            </div>

        </div>

        <!-- BOTÕES -->
        <div class="acoes">

            <a class="btn-editar">
                Editar Perfil
            </a>

            <a class="btn-sair">
                Excluir conta
            </a>

        </div>

                <br>

        <div class="acoes">
            <a href="{{ route('home') }}" class="btn-voltar">
                Voltar
            </a>
        </div>

    </div>

</main>

    @include('layouts.footer')
</body>
</html>
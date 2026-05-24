<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil do usuário</title>

    <link rel="stylesheet" href="{{ url('css/perfil.css') }}">

</head>
<body>

    @include('layouts.header')

    <main>

        <div class="perfil-card">

            <!-- TOPO -->
            <div class="perfil-topo"></div>

            <!-- FOTO -->
            <div class="foto-perfil">
                <img src="{{ url('images/user.jpeg') }}" alt="">
                <span>Alterar</span>
            </div>

            <!-- TITULO -->
            <h1>Editar Perfil</h1>

            <!-- FORM -->
            <form action="{{ route('updateUsuario', $usuario->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="infos-grid">

                    <!-- NOME -->
                    <div class="campo">
                        <label>Nome</label>

                        <input type="text"
                            name="nomeUsuario"
                            value="{{ $usuario->nomeUsuario }}">
                    </div>

                    <!-- EMAIL -->
                    <div class="campo">
                        <label>Email</label>

                        <input type="email"
                            name="emailUsuario"
                            value="{{ $usuario->emailUsuario }}">
                    </div>

                    <!-- SENHA -->
                    <div class="campo">
                        <label>Nova senha</label>

                        <input type="password"
                            name="senhaUsuario"
                            placeholder="Digite uma nova senha">
                    </div>

                    <!-- CONFIRMAR SENHA -->
                    <div class="campo">
                        <label>Confirmar senha</label>

                        <input type="password"
                            name="confirmarSenha"
                            placeholder="Confirme a senha">
                    </div>

                    <!-- NASCIMENTO -->
                    <div class="campo">
                        <label>Data de nascimento</label>

                        <input type="date"
                            name="datanascUsuario"
                            value="{{ $usuario->datanascUsuario }}">
                    </div>

                    <!-- CEP -->
                    <div class="campo">
                        <label>CEP</label>

                        <input type="text"
                            name="cepUsuario"
                            value="{{ $usuario->cepUsuario }}">
                    </div>

                    <!-- LOGRADOURO -->
                    <div class="campo">
                        <label>Logradouro</label>

                        <input type="text"
                            name="logradouroUsuario"
                            value="{{ $usuario->logradouroUsuario }}">
                    </div>

                    <!-- NUMERO -->
                    <div class="campo">
                        <label>Número</label>

                        <input type="text"
                            name="numlogradouroUsuario"
                            value="{{ $usuario->numlogradouroUsuario }}">
                    </div>

                    <!-- COMPLEMENTO -->
                    <div class="campo">
                        <label>Complemento</label>

                        <input type="text"
                            name="complementoUsuario"
                            value="{{ $usuario->complementoUsuario }}">
                    </div>

                    <!-- BAIRRO -->
                    <div class="campo">
                        <label>Bairro</label>

                        <input type="text"
                            name="bairroUsuario"
                            value="{{ $usuario->bairroUsuario }}">
                    </div>

                    <!-- CIDADE -->
                    <div class="campo">
                        <label>Cidade</label>

                        <input type="text"
                            name="cidadeUsuario"
                            value="{{ $usuario->cidadeUsuario }}">
                    </div>

                    <!-- ESTADO -->
                    <div class="campo">
                        <label>Estado</label>

                        <input type="text"
                            name="estadoUsuario"
                            value="{{ $usuario->estadoUsuario }}">
                    </div>

                </div>

                <!-- BOTÕES -->
                <div class="acoes">

                    <button type="submit" class="btn-editar">
                        Salvar alterações
                    </button>

                    <a href="{{ route('perfil') }}" class="btn-cancelar">
                        Cancelar
                    </a>

                </div>

            </form>

        </div>

    </main>

    @include('layouts.footer')

</body>
</html>
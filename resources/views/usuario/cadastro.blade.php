<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ url('css/cadastroLogin.css') }}">
</head>
<body>

    @include('layouts.header')

    <main>

        <div class="fundo">
            <div class="headerLogin">
                <div>
                    <h1>Cadastro</h1>
                    <p>Cadastre-se para te ajudarmos a se organizar melhor</p>
                </div>
            </div>

            <form style="display: flex; flex-direction: column; gap: 50px;" action="{{ route('cadastro') }}" method="POST">
                @csrf

                <div class="infosUsuario">
                    
                    <div style="display: flex; flex-direction: row; gap: 5px">
                        <div>
                            <label>Nome</label>
                            <input type="text" placeholder="Nome:" name="nomeUsuario" required>
                        </div>

                        <div>
                            <label>Email</label>
                            <input type="email" placeholder="Email:" name="emailUsuario" required>
                        </div>
                    </div>

                    <div style="display: flex; flex-direction: row; gap: 5px">
                        <div>
                            <label>Senha</label>
                            <input type="password" placeholder="Senha:" name="senhaUsuario" required>
                        </div>

                        <div>
                            <label>Data de Nascimento</label>
                            <input type="date" name="datanascUsuario" required>
                        </div>
                    </div>


                        <div>
                            <label>Cep</label>
                            <input type="text" id="cep" name="cepUsuario" required>
                        </div>
                    
                    <div style="display: flex; flex-direction: row; gap: 5px">
                        <div>
                            <label>Rua</label>
                            <input type="text" id="logradouro" name="logradouroUsuario" required>
                        </div>

                        <div>
                            <label>Número</label>
                            <input type="text" id="numero" name="numlogradouroUsuario" required>
                        </div>
                    </div>

                    <div style="display: flex; flex-direction: row; gap: 5px">
                        <div>
                            <label>Complemento</label>
                            <input type="text" id="complemento" name="complementoUsuario">
                        </div>

                        <div>
                            <label>Bairro</label>
                            <input type="text" id="bairro" name="bairroUsuario" required>
                        </div>
                    </div>

                                        <div style="display: flex; flex-direction: row; gap: 5px">
                        <div>
                            <label>Cidade</label>
                            <input type="text" id="cidade" name="cidadeUsuario" required>
                        </div>

                        <div>
                            <label>Estado</label>
                            <input type="text" id="estado" name="estadoUsuario" required>
                        </div>
                    </div>

                </div>

                <div style="display: flex; flex-direction: column; gap: 10px;">
                    
                    <button type="submit" class="enviar-btn">Cadastrar</button>

                    <a href="{{ route('login') }}" class="cadastro-btn">
                        Ja tem uma conta? faça o login
                    </a>

                </div>

            </form>

        </div>

    </main>

    @include('layouts.footer')

</body>
</html>
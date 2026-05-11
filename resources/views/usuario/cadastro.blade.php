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
                    
                    <div>
                        <label>Nome</label>
                        <input type="text" placeholder="Nome:" name="nomeUsuario" required>
                    </div>

                    <div>
                        <label>Email</label>
                        <input type="email" placeholder="Email:" name="emailUsuario" required>
                    </div>

                    <div>
                        <label>Senha</label>
                        <input type="password" placeholder="Senha:" name="senhaUsuario" required>
                    </div>

                    <div>
                        <label>Data de Nascimento</label>
                        <input type="date" name="datanascUsuario" required>
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
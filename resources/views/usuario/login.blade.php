<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link rel="stylesheet" href="{{url('css/cadastroLogin.css')}}">
</head>
<body>

    @include('layouts.header')

    <main>

        <div class="fundo">
            <div class="headerLogin">
                <div>
                    <h1>Login</h1>
                    <p>faça seu login para ajudarmos você a manter sua rotina organizada</p>
                </div>

            </div>
            <div class="infosUsuario">
                <form action="/fazerLogin" method="POST">
                @csrf
                <div>
                    <label>Email</label>
                    <input type="text" placeholder="Email:" name="email">
                </div>

                <div>
                    <label>Senha</label>
                    <input type="password" placeholder="Senha:" name="password">
                </div>
           
            </div>
            <div style="display: flex; flex-direction: column; gap: 10px;">
                <input type="submit" value="Entrar">
                <a href="{{ route('cadastro.form') }}" class="cadastro-btn">Ainda não tem uma conta? faça seu cadastro</a>
            </div>
            </form>
        </div>

    </main>

    @include('layouts.footer')

</body>
</html>
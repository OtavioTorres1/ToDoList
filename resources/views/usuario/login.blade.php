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
                
                <div>
                    <label>Email</label>
                    <input type="text" placeholder="Email:" name="txEmail">
                </div>

                <div>
                    <label>Senha</label>
                    <input type="password" placeholder="Senha:" name="txSenha">
                </div>
           
            </div>
            <div style="display: flex; flex-direction: column; gap: 10px;">
                <a href="{{ route('home') }}" class="enviar-btn">Entrar</a>
                <a href="{{ route('cadastroForm') }}" class="cadastro-btn">Ainda não tem uma conta? faça seu cadastro</a>
            </div>
        </div>

    </main>

    @include('layouts.footer')

</body>
</html>
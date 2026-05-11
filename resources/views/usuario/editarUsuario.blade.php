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
                <div class="pt1" style="opacity: 0.5;">
                    <div>
                    <label>Nome</label>
                    <input type="text" value="Otavio" readonly>
                </div>

                <div>
                    <label>Email</label>
                    <input type="email" value="Otavio@gmail.com" readonly>
                </div>

                <div>
                    <label>Senha</label>
                    <input type="text" value="********" readonly>
                </div>

                <div>
                    <label>Data de Nascimento</label>
                    <input type="text" value="30/04/2007" readonly>
                </div>
                
            </div>

                <!-- parte editar -->
                <div class="pt1">
                    <div>
                    <label>Novo nome</label>
                    <input type="text" value="Otavio">
                </div>

                <div>
                    <label>Novo email</label>
                    <input type="email" value="Otavio@gmail.com">
                </div>

                <div>
                    <label>Nova senha</label>
                    <input type="text" value="********">
                </div>

                <div>
                    <label>Data de Nascimento</label>
                    <input type="text" value="30/04/2007">
                </div>

                </div>
           
            </div>
                <a href="{{ route('perfil') }}" class="editar-btn">Confirmar</a>
                <a href="{{ route('perfil') }}" class="editar-btn" style="background-color: red;">Cancelar</a>
        </div>

    </main>

    @include('layouts.footer')

</body>
</html>
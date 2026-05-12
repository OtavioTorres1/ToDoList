<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    
        <header>

        <div>
            <a href="{{ route('home') }}">
                <img src="{{url('images/logo2.png')}}" alt="" class="logoHeader">
            </a>
        </div>

        <div style="Display: flex; flex-direction: column">
            <a href="{{ route('NovaTarefaHome') }}">
                <!-- <img src="{{url('images/icon.png')}}" class="iconeHeader" alt="" > -->
                <p style="color: white;">Nova tarefa</p>
            </a>
        </div>
        <div style="Display: flex; flex-direction: column">
            <a href="{{ route('perfil') }}">
            <!-- <img src="{{url('images/perfil.png')}}" class="iconeHeader" alt="" > -->
                    <p style="color: white  ;">Perfil</p>
        </a>
        </div>
    </header>

</body>
</html>
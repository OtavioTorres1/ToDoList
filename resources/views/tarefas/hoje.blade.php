
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{url('css/home.css')}}">

<script>

document.addEventListener("DOMContentLoaded", function(){

    const menuBtn = document.getElementById("menuBtn");
    const sidebar = document.getElementById("sidebar");

    menuBtn.addEventListener("click", function(){
        sidebar.classList.toggle("fechado");
    });

});

</script>

</head>
<body>

    @include('layouts.header')

    <main>

    <div class="layout-home">

    <!-- MENU LATERAL -->
    <aside class="sidebar"  id="sidebar">

        <h3>Filtros:</h3>

        <ul>
            <a href="{{ route('home') }}">
            <li>Todas</li>
            </a>
        </ul>
        <ul>
            <a href="{{ route('hoje') }}">
            <li class="ativo">Hoje</li>
            </a>
        </ul> 
        <ul>
            <a href="{{ route('importantes') }}">
            <li>Importantes</li>
            </a>
        </ul>
        <ul>
            <a href="{{ route('concluidas') }}">
            <li>Concluídas</li>
            </a>
        </ul>
        <ul>
            <a href="{{ route('semana') }}">
                <li>Esta semana</li>
            </a>
        </ul>


        <hr>

        <h3>Grupo de tarefas:</h3>

        <ul>
            <li>Faculdade</li>
            <li>Trabalho</li>
            <li>Pessoal</li>
        </ul>

        <hr>

        <h3>Usuario:</h3>

        <ul>
            <a href="{{ route('perfil') }}"><li>Perfil</li></a>
        </ul>

        <ul>
            <a href="{{ route('login') }}"  style="color: red;" ><li>Log-out</li></a>
        </ul>

    </aside>



        <section class="tarefas">

            <h1>Essas são suas tarefas de Hoje!</h1>
        
            <p style="opacity:0.5">Você tem {{$totalTarefas}} tarefas com prazo até hoje</p>


            <br><br><br>

            <h2>Tarefas de Hoje:</h2>
            <br>
            <div class="lista-tarefas">
                @foreach($TarefasHoje as $t)

                <!-- Se tiver concluída: -->
                 @if($t->statusTarefa == 'Concluido')
                    <div class="cards-tarefas" style="background-color: rgba(255, 255, 255, 0.2);">
                        <s>{{ $t->tituloTarefa}}</s>

                        <s style="opacity: 0.5">até {{$t->prazoTarefa}}</s>

                            <p>
                                @if($t->statusTarefa == 'Concluido')
                                <span style="background-color: #90EE90; color: #228B22; border-radius: 30px; padding: 10px; font-size:15px; font-family: Arial, Helvetica, sans-serif;">Concluído</span>

                                @elseif($t->statusTarefa == 'em andamento')
                                <span style="background-color: #1E90FF; color: white; border-radius: 30px; padding: 10px; font-size:15px; font-family: Arial, Helvetica, sans-serif;">Em andamento</span>

                                @else
                                <span style="background-color: #d4d4d4; border-radius: 30px; padding: 10px; font-size:15px; font-family: Arial, Helvetica, sans-serif;">Pendente</span>
                                @endif
                            </p>

                                <a>
                                    <img src="{{ url('images/lixo.png') }}" alt="">
                                </a>
                            
                                <a>
                                    <img src="{{ url('images/editar.png') }}" alt="">
                                </a>


                        </div>

                    <!-- Se não estiver concluída: -->
                    @else
                    <div class="cards-tarefas">
                        <p >{{ $t->tituloTarefa}}</p>

                        <p style="opacity: 0.5">até {{$t->prazoTarefa}}</p>

                            <p>
                                @if($t->statusTarefa == 'Concluido')
                                <span style="background-color: #90EE90; color: #228B22; border-radius: 30px; padding: 10px; font-size:15px; font-family: Arial, Helvetica, sans-serif;">Concluído</span>

                                @elseif($t->statusTarefa == 'Em andamento')
                                <span style="background-color: #1E90FF; color: white; border-radius: 30px; padding: 10px; font-size:15px; font-family: Arial, Helvetica, sans-serif;">Em andamento</span>

                                @else
                                <span style="background-color: #d4d4d4; border-radius: 30px; padding: 10px; font-size:15px; font-family: Arial, Helvetica, sans-serif;">Pendente</span>
                                @endif
                            </p>

                                <a>
                                    <img src="{{ url('images/lixo.png') }}" alt="">
                                </a>
                            
                                <a>
                                    <img src="{{ url('images/editar.png') }}" alt="">
                                </a>

                        </div>
                        @endif
                @if($tarefas->isEmpty())
                <p style="font-size: 15px; text-align: center; font-family: Arial, Helvetica, sans-serif;">Nenhuma tarefa cadastrada.</p>
                @endif
                @endforeach
                </div>
          
        </section>
        <a href="{{ route('NovaTarefaHome') }}" class="btn-add">
            +
        </a>
</div>  
        
    </main>

       @include('layouts.footer')

</body>
</html>
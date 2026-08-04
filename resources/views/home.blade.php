
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
            <li class="ativo">Todas</li>
        </ul>
        <ul>
            <a href="{{ route('hoje') }}">
                <li>Hoje</li>
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


        @if($totalTarefas == 0)
        <section class="tarefas">
        <div>
            <h1 style="text-align: center; color: red">Você ainda não tem terefas.</h1>
            <a href="{{ route('NovaTarefaHome') }}" class="btn-add">
                +
            </a>
        </div>
        </section>
        @else
        <section class="tarefas">

            <h1>Olá, {{$usuario->nomeUsuario}}!</h1>
        
            <p style="opacity:0.5">Você tem {{$totalTarefas}} tarefas em andamento.</p>


            <br><br><br>

            <h2>Suas tarefas:</h2>
            <br>
            <div class="lista-tarefas">
                @foreach($tarefas as $t)

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

                           
                                <form action="{{ route('deletarTarefa', $t->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="image"
                                       src="{{ url('images/lixo.png') }}" alt="Excluir"
                                       width="30px"
                                       height="30px"
                                    >
                                </form>
                  
                            

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

                           
                                <form action="{{ route('deletarTarefa', $t->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="image"
                                       src="{{ url('images/lixo.png') }}" alt="Excluir"
                                       width="30px"
                                       height="30px"
                                    >
                                </form>
                   
                            
                        

                                <a href="{{ route('alterarTarefa', ['id' => $t->id]) }}">
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


    @endif
    </main>

       @include('layouts.footer')

</body>
</html>
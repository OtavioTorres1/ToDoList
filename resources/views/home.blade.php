
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{url('css/home.css')}}">
</head>
<body>

    @include('layouts.header')

    <main>
        <table>
    <tr>
        <th>Tarefa</th>
        <th>descrição</th>
        <th>Status</th>
        <th>Prioridade</th>
        <th>Prazo</th>
    </tr>
    @foreach($tarefas as $t)
    <tr>
        <td>{{ $t->tituloTarefa}}</td>
        <td>{{$t->descTarefa}}</td>
        <td>
        @if($t->statusTarefa == 'Concluido')
        <span style="color:green;">Concluído</span>

        @elseif($t->statusTarefa == 'Em andamento')
        <span style="color:orange;">Em andamento</span>

        @else
        <span style="color:red;">Pendente</span>
        @endif
        </td>
        <td>
             @if($t->prioridadeTarefa == 'Alta')
        <span style="color:red;">Alta</span>

        @elseif($t->prioridadeTarefa == 'Media')
        <span style="color:orange;">Média</span>

        @else
        <span style="color:green;">Baixa</span>
        @endif

        </td>
        <td>{{$t->prazoTarefa}}</td>
    </tr>

    @if($tarefas->isEmpty())
    <p style="font-size: 13px; text-align: center;">Nenhuma tarefa cadastrada.</p>
    @endif
    @endforeach
</table>
    </main>

       @include('layouts.footer')

</body>
</html>
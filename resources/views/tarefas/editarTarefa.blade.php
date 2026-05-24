<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>

    <link rel="stylesheet" href="{{ url('css/cadastroLogin.css') }}">

</head>
<body>

    @include('layouts.header')

    <main>

        <div class="fundo">

            <!-- HEADER -->
            <div class="headerLogin">

                <h1>Editar tarefa</h1>

                <p style="z-index:1; color:white; margin-top:-10px;">
                    Atualize as informações da sua tarefa
                </p>

            </div>

            <!-- FORM -->
            <form action="{{ route('updateTarefa', $tarefa->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="infosUsuario">

                    <!-- LINHA 1 -->
                    <div style="display: flex; flex-direction: row; gap: 5px">

                        <!-- TITULO -->
                        <div class="campo">
                            <label>Título da Tarefa</label>

                            <input type="text"
                                name="tituloTarefa"
                                value="{{ $tarefa->tituloTarefa }}"
                                placeholder="Título">
                        </div>

                        <!-- DESCRIÇÃO -->
                        <div class="campo">
                            <label>Descrição</label>

                            <input type="text"
                                name="descTarefa"
                                value="{{ $tarefa->descTarefa }}"
                                placeholder="Descrição">
                        </div>

                    </div>

                    <!-- LINHA 2 -->
                    <div style="display: flex; flex-direction: row; gap: 5px">

                        <!-- STATUS -->
                        <div class="campo">
                            <label>Status</label>

                            <select name="statusTarefa">

                                <option value="Pendente"
                                    {{ $tarefa->statusTarefa == 'Pendente' ? 'selected' : '' }}>
                                    Pendente
                                </option>

                                <option value="Em andamento"
                                    {{ $tarefa->statusTarefa == 'Em andamento' ? 'selected' : '' }}>
                                    Em andamento
                                </option>

                                <option value="Concluido"
                                    {{ $tarefa->statusTarefa == 'Concluido' ? 'selected' : '' }}>
                                    Concluído
                                </option>

                            </select>
                        </div>

                        <!-- PRIORIDADE -->
                        <div class="campo">
                            <label>Prioridade</label>

                            <select name="prioridadeTarefa">

                                <option value="Baixa"
                                    {{ $tarefa->prioridadeTarefa == 'Baixa' ? 'selected' : '' }}>
                                    Baixa
                                </option>

                                <option value="Média"
                                    {{ $tarefa->prioridadeTarefa == 'Média' ? 'selected' : '' }}>
                                    Média
                                </option>

                                <option value="Alta"
                                    {{ $tarefa->prioridadeTarefa == 'Alta' ? 'selected' : '' }}>
                                    Alta
                                </option>

                            </select>
                        </div>

                    </div>

                    <!-- LINHA 3 -->
                    <div style="display: flex; flex-direction: row; gap: 5px">

                        <!-- PRAZO -->
                        <div class="campo">
                            <label>Prazo</label>

                            <input type="date"
                                name="prazoTarefa"
                                value="{{ $tarefa->prazoTarefa }}">
                        </div>

                        <!-- ID USUARIO -->
                        <div class="campo">
                            <label>ID do Usuário</label>

                            <input type="text"
                                name="tb_usuario_id"
                                value="{{ $tarefa->tb_usuario_id }}"
                                readonly>
                        </div>

                    </div>

                    <!-- BOTÕES -->
                    <div class="acoes">

                        <button type="submit" class="enviar-btn">
                            Salvar Alterações
                        </button>

                        <a href="{{ route('home') }}"
                        class="cadastro-btn">

                            Voltar

                        </a>

                    </div>

                </div>

            </form>

        </div>

    </main>

    @include('layouts.footer')

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Tarefa</title>
        <link rel="stylesheet" href="{{url('css/cadastroLogin.css')}}">
</head>
<body>
    @include('layouts.header')

    <main>

        <div class="fundo">
            <div class="headerLogin">
                <div>
                    <h1>Criar nova tarefa</h1>
                    <p>Insira os dados abaixo para criar uma nova tarefa</p>
                </div>
            </div>

        <form style="display: flex; flex-direction: column; gap: 50px;" action="{{ route('NovaTarefa') }}" method="POST">
        @csrf

            <div class="infosUsuario">
                
                <div style="display: flex; flex-direction: row; gap: 30px;">
                    <div>
                        <label>Título da Tarefa</label>
                        <input type="text" placeholder="Título:" name="tituloTarefa" required>
                    </div>

                    <div>
                        <label>Descrição</label>
                        <input type="text" placeholder="Descrição:" name="descTarefa" required>
                    </div>
                </div>

                <div style="display: flex; flex-direction: row; gap: 30px;">
                    <div>
                        <label>Status</label>
                        <select name="statusTarefa" required>
                            <option value="">Selecione</option>
                            <option value="pendente">Pendente</option>
                            <option value="em andamento">Em andamento</option>
                            <option value="concluida">Concluída</option>
                        </select>
                    </div>

                    <div>
                        <label>Prioridade</label>
                        <select name="prioridadeTarefa" required>
                            <option value="">Selecione</option>
                            <option value="baixa">Baixa</option>
                            <option value="media">Média</option>
                            <option value="alta">Alta</option>
                        </select>
                    </div>
                </div>

                <div style="display: flex; flex-direction: row; gap: 30px;">
                    <div>
                        <label>Prazo</label>
                        <input type="date" name="prazoTarefa" required>
                    </div>

                    <div>
                        <label>ID do Usuário</label>
                        <input type="number" name="tb_usuario_id" required>
                    </div>
                </div>

            </div>

            <div style="display: flex; flex-direction: column; gap: 10px;">
                
                <button type="submit" class="enviar-btn">Salvar Tarefa</button>

                <a href="{{ route('home') }}" class="cadastro-btn">
                    Voltar
                </a>

             </div>

        </form>

        </div>

    </main>

    @include('layouts.footer')
</body>
</html>
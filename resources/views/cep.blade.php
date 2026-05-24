<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar CEP</title>

    <link rel="stylesheet" href="{{ url('css/cadastroLogin.css') }}">
</head>
<body>

    @include('layouts.header')

    <main>

        <div class="fundo">

            <div class="headerLogin">
                <div>
                    <h1>Dados residenciais</h1>
                    <p>Digite seu CEP para preencher automaticamente os dados do endereço</p>
                </div>
            </div>

            <form action="{{ route('cadastro.finalizar') }}" method="POST">

                @csrf

                <div class="infosUsuario">

                    <div>
                        <label>CEP</label>
                        <input type="text" id="cep" name="cepUsuario" required>
                    </div>

                    <div>
                        <button type="button" id="buscarBtn" class="btn-cep">
                            Buscar CEP
                        </button>
                    </div>

                    <div style="display: flex; flex-direction: row; gap: 5px">
                        <div>
                            <label>Rua</label>
                            <input type="text" id="logradouro" name="logradouroUsuario" required>
                        </div>

                        <div>
                            <label>Número</label>
                            <input type="text" id="numero" name="numlogradouroUsuario" required>
                        </div>
                    </div>

                    <div style="display: flex; flex-direction: row; gap: 5px">
                        <div>
                            <label>Complemento</label>
                            <input type="text" id="complemento" name="complementoUsuario">
                        </div>

                        <div>
                            <label>Bairro</label>
                            <input type="text" id="bairro" name="bairroUsuario" required>
                        </div>
                    </div>

                    <div style="display: flex; flex-direction: row; gap: 5px">
                        <div>
                            <label>Cidade</label>
                            <input type="text" id="cidade" name="cidadeUsuario" required>
                        </div>

                        <div>
                            <label>Estado</label>
                            <input type="text" id="estado" name="estadoUsuario" required>
                        </div>
                    </div>

                </div>

                <div style="display: flex; flex-direction: column; gap: 10px;">

                    <button type="submit" class="enviar-btn">
                        Cadastrar
                    </button>

                </div>

            </form>

        </div>

    </main>

    @include('layouts.footer')

    <script>

        document.getElementById('buscarBtn').addEventListener('click', async function () {

            const cep = document.getElementById('cep').value.replace(/\D/g, '');

            if (cep.length !== 8) {
                alert('Digite um CEP válido');
                return;
            }

            try {

                const response = await fetch(`/buscar-cep/${cep}`);

                const data = await response.json();

                if (data.erro) {
                    alert('CEP não encontrado');
                    return;
                }

                document.getElementById('logradouro').value = data.logradouro || '';
                document.getElementById('complemento').value = data.complemento || '';
                document.getElementById('bairro').value = data.bairro || '';
                document.getElementById('cidade').value = data.localidade || '';
                document.getElementById('estado').value = data.uf || '';

            } catch (error) {

                alert('Erro ao buscar CEP');

            }

        });

    </script>

</body>
</html>
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
                    <h1>Buscar CEP</h1>
                    <p>Digite um CEP para preencher automaticamente os dados do endereço</p>
                </div>
                <div class="tiposDeInfos">
                    <a href="{{ route('perfil') }}" class="editar-btn">
                        <p style="color: black">informações básicas</p>
                    </a>
                    <a href="{{ route('cep') }}" class="editar-btn">
                       <p style="color: #110c81"> informações de residencia </p>
                    </a>
                </div>
            </div>

            <div class="infosUsuario">

                <div>
                    <label>CEP</label>
                    <input type="text" id="cep" placeholder="Digite o CEP">
                </div>

                <div>
                    <label>Logradouro</label>
                    <input type="text" id="logradouro" placeholder="Logradouro">
                </div>

                <div>
                    <label>Número</label>
                    <input type="text" id="numero" placeholder="Número">
                </div>

                <div>
                    <label>Complemento</label>
                    <input type="text" id="complemento" placeholder="Complemento">
                </div>

                <div>
                    <label>Bairro</label>
                    <input type="text" id="bairro" placeholder="Bairro">
                </div>

                <div>
                    <label>Cidade</label>
                    <input type="text" id="cidade" placeholder="Cidade">
                </div>

                <div>
                    <label>Estado</label>
                    <input type="text" id="estado" placeholder="Estado">
                </div>

            </div>

            <div style="display: flex; flex-direction: column; gap: 10px;">
                <button class="enviar-btn" id="buscarBtn">
                    Buscar CEP
                </button>
            </div>

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
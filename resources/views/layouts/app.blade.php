<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CRUD Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h2 class="mb-4">Sistema de Clientes</h2>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const cepInput = document.getElementById('cep');

            if (cepInput) {
                cepInput.addEventListener('blur', function() {

                    let cep = this.value.replace(/\D/g, '');

                    if (cep.length === 8) {

                        fetch(`/buscar-cep/${cep}`)
                            .then(response => response.json())
                            .then(data => {

                                if (!data.erro) {
                                    document.getElementById('endereco').value = data.logradouro;
                                    document.getElementById('bairro').value = data.bairro;
                                    document.getElementById('cidade').value = data.localidade;
                                    document.getElementById('uf').value = data.uf;
                                } else {
                                    alert('CEP não encontrado.');
                                }

                            })
                            .catch(error => {
                                console.error('Erro ao buscar CEP:', error);
                            });
                    }

                });
            }

        });
        
    </script>

</body>

</html>
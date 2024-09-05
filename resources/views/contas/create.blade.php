<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <a href="{{ route('conta.index') }}" class="btn btn-primary mb-3">Listar</a>

        <h2 class="mb-4">Cadastrar a Conta</h2>

        <form action="{{ route('conta.store') }}" method="POST" class="w-100">
            @csrf

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da conta" required>
            </div>

            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" name="valor" id="valor" placeholder="Usar '.' separar real do centavo" required>
            </div>

            <div class="form-group">
                <label for="vencimento">Vencimento</label>
                <input type="date" class="form-control" name="vencimento" id="vencimento" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

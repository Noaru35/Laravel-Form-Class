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
        <h2 class="mb-4">Listar as Contas</h2>

        <div class="btn-group mb-4" role="group" aria-label="Basic example">
            <a href="{{ route('conta.create') }}" class="btn btn-success">Cadastrar</a>
            <a href="{{ route('conta.show') }}" class="btn btn-info">Visualizar</a>
            <a href="{{ route('conta.edit') }}" class="btn btn-warning">Editar</a>
            {{--<a href="{{ route('conta.destroy') }}" class="btn btn-danger">Apagar</a>--}}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

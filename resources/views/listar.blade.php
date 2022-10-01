<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>

</head>

<body>
        <h1>Lista de Pessoas</h1>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>nome</th>
                    <th>idade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pessoas as $p)
                <tr>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->idade}}</td>
                    <td><a href="/editar/{{$p->id}}">editar</a></td>
                    <td><a href="/excluir/{{$p->id}}">excluir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
        <a href="/">voltar</a>
</body>

</html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Personajes Guardados</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Specie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($savedCharacters as $character)
                    <tr>
                        <td>{{ $character->name }}</td>
                        <td>{{ $character->status }}</td>
                        <td>{{ $character->species }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-d04lZos5lRZ9c5lUfvcIIpTzF6Cf7Qp1xdw8IrUxuTC7Ghq1jYdJ+GM4lXMDUj" crossorigin="anonymous"></script>
</body>
</html>
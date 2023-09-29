@extends('layouts.app')
@section('content')
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
</body>
</html>
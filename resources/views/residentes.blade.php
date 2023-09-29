Residentes

<table>

    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $residente)
        <tr>
            <td><img src="{{ $residente['image'] }}"> </td>
            <td>{{ $residente['name'] }} </td>
            <td>{{ $residente['status'] }} </td>
            <td>{{ $residente['species'] }} </td>
            <td>{{ $residente['origin']['name'] }} </td>
            <td>{{ $residente['episode'][0] }} </td>
            <td>{{ $residente['episode'][1] }} </td>
            <td>{{ $residente['episode'][2] }} </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
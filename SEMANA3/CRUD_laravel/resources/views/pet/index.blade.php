<h1>Listado de Mascotas</h1>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>color</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
       @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->nombre }}</td>
            <td>{{ $pet->color }}</td>
            <form action="{{ url('/pet/'.$pet->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <td><input type="submit"
                onclick="return confirm('Desea eliminar el registro')"
                value="Del"/></td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>


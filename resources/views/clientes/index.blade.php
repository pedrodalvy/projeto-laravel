<h3>Lista de Clientes</h3>
<a href="{{route('clientes.create')}}">Novo Cliente</a>
<ol>
    @foreach($clientes as $cliente)
        <li>
            {{ $cliente['nome']  }} |
            <a href="{{route('clientes.edit', $cliente['id'])}}">Editar</a> |
            <a href="{{route('clientes.show', $cliente['id'])}}">Visualizar</a> |
            <form action="{{route('clientes.destroy', $cliente['id'])}}" method="post" autocomplete="off">
                @csrf
                @method('DELETE')
                <input type="submit" value="Remover">
            </form>
        </li>
    @endforeach
</ol>

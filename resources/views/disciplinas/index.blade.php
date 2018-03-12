<html>

<body>

<input type="button" onclick='location.href="/disciplinas/create";' value="Cadastrar"/>

<ul>
@foreach ($disciplinas as $disciplina) 
    <li>
        <form method="POST" action="/disciplinas/{{ $disciplina->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a> 
            &nbsp;
            <input type="button" onclick='location.href="/disciplinas/{{ $disciplina->id }}/edit";' value="Editar"/>
            &nbsp;
            <button type="submit">Apagar</button>
        </form>
    </li>
@endforeach
</ul>

</body>

</html>

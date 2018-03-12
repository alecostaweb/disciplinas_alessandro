<html>

<body>

<a href="/disciplinas/create">[ Cadastrar disciplina ]</a>

<ul>
@foreach ($disciplinas as $disciplina) 
    <li>
        <a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a> 
        &nbsp;
        <a href="/disciplinas/{{ $disciplina->id }}/edit">[ Editar ]</a>
    </li>
@endforeach
</ul>

</body>

</html>

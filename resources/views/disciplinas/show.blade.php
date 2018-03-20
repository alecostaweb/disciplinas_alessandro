@extends ('master')

@section ('content')

    <h1>{{ $disciplina->titulo }}</h1>

    <p>{{ $disciplina->ementa }}</p>

    <h2>Turmas</h2>
    
    <ul>
    @foreach ($disciplina->turmas as $turma)
        <li>        
            {{ $turma->ministrante }}
            , início em: {{ Carbon\Carbon::parse($turma->inicio)->format('d/m/Y') }}
        </li>
    @endforeach
    </ul>

    <input class="btn btn-warning" type="button" onclick='location.href="/disciplinas/{{ $disciplina->id }}/edit";' value="Editar"/>
    &nbsp;
    <input class="btn btn-success" type="button" onclick='location.href="/disciplinas/{{ $disciplina->id }}/turmas/create";' value="Inserir Turma"/>
    &nbsp;
    <input class="btn btn-primary" type="button" onclick='location.href="/";' value="Disciplinas"/>

@endsection

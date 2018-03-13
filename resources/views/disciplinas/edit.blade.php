@extends ('master')

@section ('content')

    <form method="POST" action="/disciplinas/{{ $disciplina->id }}">

        {{ csrf_field() }}
        {{ method_field('patch') }}

        Título:<input name="titulo" value="{{ $disciplina->titulo }}"><br />
        Ementa: <textarea name="ementa">{{ $disciplina->ementa }}</textarea><br />

        <button type="submit">Salvar</button>
        &nbsp;
        <input type="button" onclick='location.href="/";' value="Disciplinas"/>
    </form>

@endsection    

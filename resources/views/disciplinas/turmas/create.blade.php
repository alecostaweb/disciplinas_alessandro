@extends ('master')

@section ('content')

<h1>{{ $disciplina->titulo }}</h1>

<p>{{ $disciplina->ementa }}</p>
    
<form method="POST" action="/disciplinas/{{ $disciplina->id }}/turmas">
    {{ csrf_field() }}

    Ministrante: <input name="ministrante">
    <br />
    Data início: <input name="inicio" placeholder="dd/mm/aaaa">
    <br />
    Data fim: <input name="fim" placeholder="dd/mm/aaaa">
    <br />
    Bibliografia: <textarea name="bibliografia"></textarea>
    <br />
    <button type="submit" class="btn btn-success">Salvar</button>
</form>

@endsection

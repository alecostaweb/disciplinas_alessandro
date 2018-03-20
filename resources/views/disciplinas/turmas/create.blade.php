@extends ('master')

@section ('content')

<p>&nbsp;</p>
    
<h1>{{ $disciplina->titulo }}</h1>

<p>{{ $disciplina->ementa }}</p>
    
<form method="POST" action="/disciplinas/{{ $disciplina->id }}/turmas">
    {{ csrf_field() }}

    Ministrante: <input name="ministrante">
    <br />
    Data início: <input type="date" name="inicio">
    <br />
    Data fim: <input type="date" name="fim">
    <br />
    Bibliografia: <textarea name="bibliografia"></textarea>
    <br />
    <button type="submit" class="btn btn-success">Salvar</button>
    &nbsp;
    <input class="btn btn-primary" type="button" onclick='location.href="/";' value="Disciplinas"/>
</form>

@endsection

<script type="text/javascript">
$('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    language: 'pt-BR'
});
</script>

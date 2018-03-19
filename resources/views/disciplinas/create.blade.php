@extends ('master')

@section ('content')

    <form method="POST" action="/disciplinas">
        {{ csrf_field() }}

        Título: <input name="titulo"><br />
        Ementa: <textarea name="ementa"></textarea><br />

        <button class="btn btn-success" type="submit">Salvar</button>
        &nbsp;
        <input class="btn btn-primary" type="button" onclick='location.href="/";' value="Disciplinas"/>
    </form>

@endsection    

@extends ('master')

@section ('content')

    <input type="button" class="btn btn-primary" onclick='location.href="/disciplinas/create";' value="Cadastrar"/>

    <ul>
    @foreach ($disciplinas as $disciplina) 
        <li>
            <form method="POST" action="/disciplinas/{{ $disciplina->id }}">

                {{ csrf_field() }}
                {{ method_field('delete') }}
            
                <a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a> 
                &nbsp;
                <input type="button" class="btn btn-warning" onclick='location.href="/disciplinas/{{ $disciplina->id }}/edit";' value="Editar"/>
                &nbsp;
                <button type="submit" class="btn btn-danger">Apagar</button>
            </form>
        </li>
    @endforeach
    </ul>

@endsection

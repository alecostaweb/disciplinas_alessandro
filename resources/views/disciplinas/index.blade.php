@extends ('master')

@section ('content')

    <h1>Disciplinas</h1>
    
    @auth
        <input type="button" class="btn btn-primary" onclick='location.href="/disciplinas/create";' value="Cadastrar"/>
    @endauth
        
    <ul>
    @foreach ($disciplinas as $disciplina) 
        <li>
            <form method="POST" action="/disciplinas/{{ $disciplina->id }}">

                {{ csrf_field() }}
                {{ method_field('delete') }}
            
                <a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a> 
                
                @auth
                    &nbsp;
                    <input type="button" class="btn btn-warning" onclick='location.href="/disciplinas/{{ $disciplina->id }}/edit";' value="Editar"/>
                    &nbsp;
                    <button type="submit" class="btn btn-danger">Apagar</button>
                @endauth
            
            </form>
        </li>
    @endforeach
    </ul>

@endsection

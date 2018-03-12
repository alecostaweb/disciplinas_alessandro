<h1>{{ $disciplina->titulo }}</h1>

<p>{{ $disciplina->ementa }}</p>

<input type="button" onclick='location.href="/disciplinas/{{ $disciplina->id }}/edit";' value="Editar"/>
&nbsp;
<input type="button" onclick='location.href="/";' value="Disciplinas"/>

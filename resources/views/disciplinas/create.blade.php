<form method="POST" action="/disciplinas">
{{ csrf_field() }}

Título: <input name="titulo"><br />
Ementa: <textarea name="ementa"> </textarea><br />
<button type="submit">Salvar</button>
</form>

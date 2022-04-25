<html>

<h1>Boolean Cursos</h1>
<h4>Upload de video sem fila</h4>
<form action="{{route('upload-sem-fila')}}">
    @csrf
<input type="submit" value="Sem fila">
</form>
<h4>Upload de videos com fila</h4>
<form action="{{route('upload-com-fila')}}">
    @csrf
<input type="submit" value="Com fila">
</form>
</html>

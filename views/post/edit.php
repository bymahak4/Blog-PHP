<h1>Editar Post</h1>

<form action="<?=base_url?>post/save" method="POST">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" required>

    <label for="contenido">Contenido</label>
    <input type="text" name="contenido" required>
    
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" required>

    <label for="hora">Hora</label>
    <input type="time" name="hora" required>

    <input type="submit" value="Crear Post">
</form>
<h1>Editar Post</h1>

<?php while($mostrar = $myposts->fetch_object()) : ?>
<form action="<?=base_url?>post/update&id=<?=$mostrar->idPost;?>" method="POST">

    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" placeholder="<?=$mostrar->titPost;?>" required>

    <label for="contenido">Contenido</label>
    <input type="text" name="contenido" placeholder="<?=$mostrar->contPost;?>" required>
    
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" value="<?=$mostrar->fechPost;?>" required>

    <label for="hora">Hora</label>
    <input type="time" name="hora" value="<?=$mostrar->horaPost;?>" required>

    <input type="submit" value="Actualizar Post">
</form>
<?php endwhile; ?>
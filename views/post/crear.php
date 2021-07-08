<h1>Crear Nuevo Post</h1>



<form action="<?=base_url?>post/save" method="POST">
<?php if(isset($_SESSION['createPost']) && $_SESSION['createPost'] == 'complete'): ?>
    <strong class="alert_green">Creacion De Post Completado Correctamente</strong><br>
<?php elseif(isset($_SESSION['createPost']) && $_SESSION['createPost'] != 'complete'): 
    $error = $_SESSION['createPost'];
    echo $error;
    endif; 
?>
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo">

    <label for="contenido">Contenido</label>
    <input type="text" name="contenido">
    
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha">

    <label for="hora">Hora</label>
    <input type="time" name="hora">

    <input type="submit" value="Crear Post">
</form>

<?php Utils::deleteSession('createPost'); ?>
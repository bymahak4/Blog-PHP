<h1>Formulario</h1>


<form action="<?=base_url?>usuario/save" method="POST">

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
    <strong class="alert_green">Registro Completado Correctamente</strong><br>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] != 'complete'): 
    $error = $_SESSION['register'];
    echo $error;
    endif;
?>
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" maxlength="20"/><br>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" maxlength="20"/><br>

    <label for="email">Email:</label>
    <input type="email" name="email" maxlength="50"/><br>

    <label for="contraceña">Contraceña</label>
    <input type="password" name="password" minlength="4" maxlength="255"/><br>

    <input type="submit" value="Registrarse"/>
</form>


<?php Utils::deleteSession('register'); ?>
<h1>Formulario</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'Complete'): ?>
    <strong>Registro Completado Correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'Failed'): ?>
    <strong>Regsitro Fallido</strong>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>

<form action="<?=base_url?>usuario/save" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" require maxlength="20"/><br>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" require maxlength="20"/><br>

    <label for="email">Email:</label>
    <input type="email" name="email" require maxlength="50"/><br>

    <label for="contraceña">Contraceña</label>
    <input type="password" name="password" require maxlength="255"/><br>

    <input type="submit" value="Registrarse"/>
</form>
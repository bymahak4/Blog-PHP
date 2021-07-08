<h1>Mis Datos</h1>

<form action="<?=base_url?>usuario/update" method="POST">

<?php if(isset($_SESSION['update']) && $_SESSION['update'] == 'complete'): ?>
    <strong class="alert_green">Registro Actualizado Correctamente</strong><br>
<?php elseif(isset($_SESSION['update']) && $_SESSION['update'] != 'complete'): 
    $error = $_SESSION['update'];
    echo $error;
    endif; 
?>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" placeholder="<?=$_SESSION['identity']->nomUser;?>" maxlength="20"/><br>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" placeholder="<?=$_SESSION['identity']->apeUser;?>" maxlength="20"/><br>

    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="<?=$_SESSION['identity']->emailUser;?>" maxlength="20" readonly/><br>
    
    <input type="submit" value="Actualizar"/>

</form>
<?php Utils::deleteSession('update'); ?>
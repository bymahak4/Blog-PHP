<h1>Logeo</h1>

<?php if(!isset($_SESSION['identity'])): ?> 

<form action="<?=base_url?>usuario/login" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" maxlength="50"/>
    
    <label for="password">Contraseña:</label>
    <input type="password" name="password" minlength="4" maxlength="255"/>
    
    <input type="submit" value="Logeate"/>
</form>
<h2>prueba</h2>
<?php else: ?>
    <h3><?=$_SESSION['identity']->nomUser ?></h3>
<?php endif; ?>



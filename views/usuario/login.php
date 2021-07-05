<h1>Logeo</h1>
<form action="<?=base_url?>usuario/login" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" maxlength="50"/>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" minlength="4" maxlength="255"/>
    
    <input type="submit" value="Logeate"/>
</form>


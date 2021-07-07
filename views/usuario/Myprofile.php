<h1>Mis Datos</h1>


<form action="<?=base_url?>usuario/edit" method="POST">


    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" maxlength="20"/><br>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" maxlength="20"/><br>

    <label for="email">Email:</label>
    <input type="email" name="email" maxlength="50"/><br>

    <input type="submit" value="Actualizar"/>
</form>

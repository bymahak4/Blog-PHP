<h1>Formulario</h1>

<form action="index.php?controller=usuario&action=save" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" require/><br>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" require/><br>

    <label for="email">Email:</label>
    <input type="email" name="email" require/><br>

    <label for="contraceña">Contraceña</label>
    <input type="password" name="password" require/><br>

    <input type="submit" value="Registrarse"/>
</form>
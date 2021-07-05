<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="canonical"   href="https://getbootstrap.com/docs/4.3/examples/album/">
    <link rel="stylesheet"  href="<?=base_url?>css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?=base_url?>css/main.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto medio">
            <li class="nav-item active">
              <a class="nav-link" href="#">POST</a>
            </li>
          </ul>
          <ul class="mr-5">
            <li class="dropdown ml-3" id="dropdownUser" style="list-style:none;float:right;">
                <button id="menuUser" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true">Invitado</button>
                <ul id="profileMenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" id="register" href="views/formulario.php">Registrate</a>
                  <a class="dropdown-item" id="login" href="views/login.php">Logearte</a>
                  <a class="dropdown-item" id="profileData" href="views/myProfile.php">Mi Datos</a>
                  <a class="dropdown-item" id="logoutLink" href="views/logout.html" style="color:red">Cerrar sesión</a>
                </ul>
            </li>
          </ul>
        </div>
    </nav>

    <main role="main" class="container mt-3">
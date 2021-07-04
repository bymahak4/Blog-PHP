function showNavegationBarBlog() {
  document.getElementById("showNvar").innerHTML += ` 
    <div class="inner">
      <h3 class="masthead-brand">BLOG</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active">Usuario: </a>
        <li class="dropdown ml-3" id="dropdownUser" style="list-style:none;float:right;">
            <button id="menuUser" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Invitado</button>
            <ul id="profileMenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" id="register" href="Views/formulario.php">Registrate</a>
              <a class="dropdown-item" id="login" href="Views/login.php">Logearte</a>
              <a class="dropdown-item" id="profileData" href="Views/myProfile.php">Mi Datos</a>
              <a class="dropdown-item" id="logoutLink" href="Views/logout.html" style="color:red">Cerrar sesión</a>
            </ul>
        </li>
      </nav>
    </div>
    `
}


showNavegationBarBlog();




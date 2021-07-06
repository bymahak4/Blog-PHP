<!-- BARRA LATERAL -->
<aside id="lateral">
	
	<div id="login" class="block_aside">
		
		<?php if(!isset($_SESSION['identity'])): ?>
			<h3>Entrar a la web</h3>
			<form action="<?=base_url?>usuario/login" method="POST">
				<label for="email">Email</label>
				<input type="email" name="email" />
				<label for="password">Contraseña</label>
				<input type="password" name="password" />
				<input type="submit" value="Entrar" />
			</form>
		<?php else: ?>
			<h3><?=$_SESSION['identity']->nomUser?></h3>
		<?php endif; ?>

		<ul>
        <?php if(isset($_SESSION['identity'])) : ?>
          <li><a href="<?=base_url?>post/index">Mostrar mis Post</a></li>
          <li><a href="<?=base_url?>usuario/data">Mis Datos</a></li>
          <li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
        <?php endif; ?>
        
			  <li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
		</ul>
	</div>

</aside>

<!-- CONTENIDO CENTRAL -->
<div id="central">
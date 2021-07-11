<?php
    require_once 'controllers/postController.php';
	$meses = [
		'Enero'         => '1',
		'Febrero'       => '2',
		'Marzo'         => '3',
		'Abril'         => '4',
		'Mayo'          => '5',
		'Junio'         => '6',
		'Julio'         => '7',
		'Agosto'        => '8',
		'Septiembre'    => '9',
		'Octubre'       => '10',
		'Noviembre'     => '11',
		'Diciembre'     => '12',
	];
    $pl = new post();

?>   
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
          <li><a href="<?=base_url?>post/myPosts">Mostrar mis Post</a></li>
          <li><a href="<?=base_url?>usuario/actualizar">Mis Datos</a></li>
          <li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
        
        <?php else: ?>
			    <li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
        <?php endif; ?>
    	</ul>
		
		<?php //var_dump($meses) ;
		if(isset($_SESSION['identity'])) : ?>
    	<ul>
        	<h3>Archivos de Posts</h3>
		<?php
            $pls = $pl->listMesPost();
			foreach ($pls as $pls2) { ?>
			<li><a href="<?=base_url?>post/listar&mes=<?=$pls2[0]?>&year=<?=$pls2[1]?>">Mes:<?=$pls2[0]?> / Año:<?=$pls2[1]?></a></li>		
		<?php } ?>
    	</ul>
		<?php endif; ?>
	</div>
			
</aside>

<!-- CONTENIDO CENTRAL -->
<div id="central">
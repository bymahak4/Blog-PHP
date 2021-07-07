<h1>Todos los Post de Usuarios</h1>

<a class="button button-small" href="<?=base_url?>post/crear">Crear Post</a>

<?php while($posteo = $posts->fetch_object()) : ?>
<div class="blog-post">
    <h2 class="blog-post-title"><?=$posteo->titPost;?></h2>
    <p class="blog-post-meta"><?=$posteo->fechPost;?>, <?=$posteo->horaPost;?> by <b><?=$posteo->nomUser;?></b></p>
    <p class="conetenido-post"><?=$posteo->contPost;?></p>
    <hr>
</div>
<?php endwhile; ?>
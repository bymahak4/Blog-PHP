<h1>Mis Post</h1>

<a class="button button-small" href="<?=base_url?>post/crear">Crear Post</a>
<hr>
<?php while($posteo = $myposts->fetch_object()) : ?>
<div class="blog-post">
    <h2 class="blog-post-title"><?=$posteo->titPost;?></h2>
    <p class="blog-post-meta"><?=$posteo->fechPost;?>, <?=$posteo->horaPost;?> by <b><?=$posteo->nomUser;?></b></p>
    <p class="conetenido-post"><?=$posteo->contPost;?></p>
    <hr>
    <div class="blog-post-btn">
        <a class="button button-small btnP" href="<?=base_url?>post/edit&id=<?=$posteo->idPost?>">Editar Post</a>
        <a class="button button-small btnP" href="<?=base_url?>post/eliminar&id=<?=$posteo->idPost?>">Eliminar Post</a>
    </div>
    <hr><hr>
</div>
<?php endwhile; ?>
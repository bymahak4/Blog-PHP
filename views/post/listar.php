<h1>listar</h1>

<?php while($posteo = $resList->fetch_object()) : ?>
<div class="blog-post">
    <h2 class="blog-post-title"><?=$posteo->titPost;?></h2>
    <p class="blog-post-meta"><?=$posteo->fechPost;?>, <?=$posteo->horaPost;?> by <b><?=$posteo->nomUser;?></b></p>
    <p class="conetenido-post"><?=$posteo->contPost;?></p>
    <hr>
</div>
<?php endwhile; ?>

<?php
    require_once 'controllers/paginationController.php';
    
    $pc = new PaginationController();
    
?>
<h1>Todos los Post de Usuarios</h1>
 
<?php while($posteo = $posts->fetch_object()) : ?>
<div class="blog-post">
    <h2 class="blog-post-title"><?=$posteo->titPost;?></h2>
    <p class="blog-post-meta"><?=$posteo->fechPost;?>, <?=$posteo->horaPost;?> by <b><?=$posteo->nomUser;?></b></p>
    <p class="conetenido-post"><?=$posteo->contPost;?></p>
    <hr>
</div>
<?php endwhile; ?>

<div class="btnListar">
    <?php $pages = $pc->Paginate("post", 3);
     for ($i=1; $i<=$pages; $i++) {
         ?>
         <a href="<?=base_url?>post/index&page=<?=$i?>"><?php echo $i; ?></a>
         <?php
     }   
        
    ?>
</div> 


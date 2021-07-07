<?php
    require_once 'models/postModel.php';
    class postController{
        public function index(){
            $post = new Post();
            $posts = $post-> getAll();
            
            require_once "views/post/index.php";
        }
    
    }
<?php
    require_once 'models/postModel.php';
    class postController{
        public function index(){
            Utils::isLogin();
            $post = new Post();
            $posts = $post-> getAll();

            require_once "views/post/index.php";
        }
    
        public function crear() {
            Utils::isLogin();
            require_once 'views/post/crear.php';
        }

        public function save() {
            Utils::isLogin();
            if(isset($_POST)) {
                $identity = $_SESSION['identity'];
                $post = new Post();
                $post->setTitulo($_POST['titulo']);
                $post->setContenido($_POST['contenido']);
                $post->setFecha($_POST['fecha']);
                $post->setHora($_POST['hora']);
                $post->setIdUsuario($identity->idUser);
                $post->setEmailUsuario($identity->emailUser);
                $save = $post->save();
            }
            header("Location:".base_url."post/index");
        }
    }
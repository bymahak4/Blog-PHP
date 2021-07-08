<?php
    require_once 'models/postModel.php';
    class postController{
        public function index(){
            Utils::isLogin();
            $post = new Post();
            $posts = $post->getAll();
            require_once "views/post/index.php";
        }

        public function myPosts() {
            Utils::isLogin();
            $mypost = new Post();
            $mypost->setIdUsuario($_SESSION['identity']->idUser);
            $myposts = $mypost->getMyPost();

            require_once 'views/post/myPosts.php';
        }

        public function crear() {
            Utils::isLogin();
            require_once 'views/post/crear.php';
        }

        public function save() {
            Utils::isLogin();
            if(isset($_POST)) {
                $post = new Post();
                $post->setTitulo($_POST['titulo']);
                $post->setContenido($_POST['contenido']);
                $post->setFecha($_POST['fecha']);
                $post->setHora($_POST['hora']);
                $post->setIdUsuario($_SESSION['identity']->idUser);
                $post->setEmailUsuario($_SESSION['identity']->emailUser);
                $save = $post->save();
            }
            
            header("Location:".base_url."post/index");
        }

        public function edit() {
            Utils::isLogin();
        

            require_once 'views/post/edit.php';
        }
        

        public function eliminar(){
            Utils::isLogin();
           
          
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $eliminar = new Post();
                $eliminar->setId($id);
                $delete = $eliminar->delete();
               
                if($delete){
                    $_SESSION['delete'] = 'complete';
                }else{
                    $_SESSION['delete'] = 'failed';
                }
            }else{
                $_SESSION['delete'] = 'failed';


            }
            
            header('Location:'.base_url.'post/myPosts');
            
        }
    }
<?php
    require_once 'models/postModel.php';
    class postController{
        private $pm;
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
                $titulo     = isset($_POST['titulo']) ? trim($_POST['titulo']) : false;
                $contenido  = isset($_POST['contenido']) ? trim($_POST['contenido']) : false;
                $fecha      = isset($_POST['fecha']) ? trim($_POST['fecha']) : false;
                $hora       = isset($_POST['hora']) ? trim($_POST['hora']) : false;
                
                $validar = Utils::validatePost($titulo, $contenido, $fecha, $hora);
                
                if($validar == false) {
                    $post = new Post();
                    $post->setTitulo($titulo);
                    $post->setContenido($contenido);
                    $post->setFecha($fecha);
                    $post->setHora($hora);
                    $post->setIdUsuario($_SESSION['identity']->idUser);
                    $post->setEmailUsuario($_SESSION['identity']->emailUser);
               
                    $save = $post->save();
                    
                    if($save) {
                        $_SESSION['createPost'] = "complete";
                    }else {
                        $_SESSION['createPost'] = "failed";
                    }
                }else {
                    $_SESSION['createPost'] = $validar;  
                }
            }else {
                $_SESSION['createPost'] = "<strong class='alert_red'>Algo Fallo</strong>";
            }
            header("Location:".base_url."post/crear");
        }

        public function edit() {
            Utils::isLogin();
                $mypost = new Post();
                $mypost->setId($_GET['id']);
                $myposts = $mypost->getOneMyPost();
            require_once 'views/post/edit.php';
            
        }       

        public function update() {
            Utils::isLogin();
            if(isset($_SESSION['identity'])){
                $id = $_GET['id'];
                $update = new Post();
                $update->setId($id);
                $update->setTitulo($_POST['titulo']);
                $update->setContenido($_POST['contenido']);
                $update->setFecha($_POST['fecha']);
                $update->setHora($_POST['hora']);
                $updates = $update->edits();
                
                if($updates){
                    $_SESSION['updatePost'] = 'complete';
                }else{
                    $_SESSION['updatePost'] = 'failed';
                }
            }else{
                $_SESSION['updatePost'] = 'failed';
            }
            
            header('Location:'.base_url.'post/myPosts');   
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
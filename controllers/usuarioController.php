<?php
require_once 'models/usuarioModel.php';
    class usuarioController{
        public function index(){
            echo "Controlador Usuario index";
        }
        
        public function registro(){
            require_once 'views/usuario/formulario.php';
        }

        public function save() {
            if(isset($_POST)) {
                $nombre     = isset($_POST['nombre']) ? trim($_POST['nombre']) : false;
                $apellido   = isset($_POST['apellido']) ? trim($_POST['apellido']) : false;
                $email      = isset($_POST['email']) ? trim($_POST['email']) : false;
                $password   = isset($_POST['password']) ? trim($_POST['password']) : false;

                $validar = Utils::validate($nombre, $apellido, $email, $password);
                
                if($validar == false){
                    $usuario = new Usuario();
                    $usuario->setNombre($nombre);
                    $usuario->setApellido($apellido);
                    $usuario->setEmail($email);
                    $usuario->setPassword($password);
                    
                    
                    if($_SESSION['register']="complete") {
                        $save = $usuario->edit();
                    }else {
                        $save = $usuario->save();
                    }
                    
                    
                    if($save) {
                        $_SESSION['register'] = "complete";
                    }else {
                        $_SESSION['register'] = "failed";
                    }
                }else {
                    $_SESSION['register'] = $validar;  
                }
            }else {
                $_SESSION['register'] = "<strong class='alert_red'>Algo Fallo</strong>";
            }
            header("Location:".base_url.'usuario/registro');
        }

        public function logeo() {
            require_once 'views/usuario/login.php';
        }

        public function login() {
            if(isset($_POST)) {
                $usuario = new Usuario();
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);
                
                $identity = $usuario->login();
                
                
                if($identity && is_object($identity)){
                    $_SESSION['identity'] = $identity;
                }else {
                    $_SESSION['error_login'] = "No encontrado chabon";
                }
                
            }
            header("Location:".base_url);
        }

        public function logout() {
            if(isset($_SESSION['identity'])) {
                unset($_SESSION['identity']);
            }
            header("Location:".base_url);
        }

        public function actualizar() {
            require_once 'views/usuario/Myprofile.php';
        }

        public function update() {
            
        }
    }
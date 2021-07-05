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
                    $save = $usuario->save();
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
    }
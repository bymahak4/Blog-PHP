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
                $usuario = new Usuario();
                $usuario->setNombre($_POST['nombre']);
                $usuario->setApellido($_POST['apellido']);
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);
                $save = $usuario->save();
                if($save) {
                    $_SESSION['register'] = "Complete";
                }else {
                    $_SESSION['register'] = "Failed";
                }
                //var_dump($usuario);
            }else {
                $_SESSION['register'] = "Failed";
                header("Location:".base_url.'usuario/registro');
            }
        }
    }
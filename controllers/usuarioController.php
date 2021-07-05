<?php
    class usuarioController{
        public function index(){
            echo "Controlador Usuario index";
        }
        
        public function registro(){
            require_once 'views/usuario/formulario.php';
        }

        public function save() {
            if(isset($_POST)) {
                var_dump($_POST);
            } 
        }
    }
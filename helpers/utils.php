<?php

    class Utils {
        public static function deleteSession($name) {
            if(isset($_SESSION[$name])) {
                $_SESSION[$name] = null;
                unset($_SESSION[$name]);
            }
            return $name;   
        }
        
        public static function validate($nombre, $apellido, $email, $password) {
            $error = true;

            if(empty($nombre)) {
                $error = "<strong class='alert_red'>Por favor introduzca su Nombre</strong><br>";
                return $error;
            }elseif(is_numeric($nombre) && preg_match("/[0-9]/", $nombre)){
                $error = "<strong class='alert_red'>Por favor introduzca un Nombre valido</strong><br>";
                return $error;
            }else{
                $error = false; 
            }
     
            if(empty($apellido)){
                $error = "<strong class='alert_red'>Por favor introduzca su Apellido</strong><br>";
                return $error;
            }elseif(is_numeric($apellido) && preg_match("/[0-9]/", $apellido)){
                $error = "<strong class='alert_red'>Por favor introduzca un Apellido valido</strong><br>";
                return $error;
            }else{
                $error = false; 
            }

            $sql = "SELECT emailUser FROM usuario WHERE emailUser = '$email' ";
            $conexion = database::connect();
            $result = mysqli_fetch_assoc($conexion->query($sql));

            if(empty($email)) {
                $error = "<strong class='alert_red'>Por favor introduzca su Email</strong><br>";
                return $error;
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error = "<strong class='alert_red'>Por favor introduzca un Email valido</strong><br>";
                return $error;
            }elseif(!empty($result)){
                $error = "<strong class='alert_red'>El email ya esta registrado</strong><br>";
                return $error;
            }else{
                $error = false; 
            }

            if(empty($password)){
                $error = "<strong class='alert_red'>Por favor introduzca su Contraseña</strong><br>";
                return $error;
            }elseif(strlen($password) <= 4){
                $error = "<strong class='alert_red'>Por favor introduzca una contraseña valida, minimo 4 caracteres</strong><br>";
                return $error;
            }else{
                $error = false;
            }
            return $error;
        }

        public static function validateUpdate($nombre, $apellido) {
            $error = true;

            if(empty($nombre)) {
                $error = "<strong class='alert_red'>Por favor introduzca su Nombre</strong><br>";
                return $error;
            }elseif(is_numeric($nombre) && preg_match("/[0-9]/", $nombre)){
                $error = "<strong class='alert_red'>Por favor introduzca un Nombre valido</strong><br>";
                return $error;
            }else{
                $error = false; 
            }
     
            if(empty($apellido)){
                $error = "<strong class='alert_red'>Por favor introduzca su Apellido</strong><br>";
                return $error;
            }elseif(is_numeric($apellido) && preg_match("/[0-9]/", $apellido)){
                $error = "<strong class='alert_red'>Por favor introduzca un Apellido valido</strong><br>";
                return $error;
            }else{
                $error = false; 
            }
            return $error;
        }

        public static function validatePost($titulo, $contenido, $fecha, $hora) {
            $error = true;

            if(empty($titulo)) {
                $error = "<strong class='alert_red'>Por favor introduzca un Titulo</strong><br>";
                return $error;
            }else{
                $error = false; 
            }
            if(empty($contenido)) {
                $error = "<strong class='alert_red'>Por favor introduzca un Contenido</strong><br>";
                return $error;
            }else{
                $error = false; 
            }
            if(empty($fecha)) {
                $error = "<strong class='alert_red'>Por favor introduzca una Fecha</strong><br>";
                return $error;
            }else{
                $error = false; 
            }
            if(empty($hora)) {
                $error = "<strong class='alert_red'>Por favor introduzca una Hora</strong><br>";
                return $error;
            }else{
                $error = false; 
            }
            return $error;
        }

        public static function isLogin() {
            if(!isset($_SESSION['identity'])) {
                header("Location:".base_url);
            }else {
                return true;
            }
        }
    }
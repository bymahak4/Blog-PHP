<?php

    class Usuario {
        private $id;
        private $nombre;
        private $apellido;
        private $email;
        private $password;
        private $db;
        
        public function __construct() {
            $this->db = database::connect();
        }
        
        function getID() {
            return $this->id;
        }
        function getNombre() {
            return $this->nombre;
        }
        function getApellido() {
            return $this->apellido;
        }
        function getEmail() {
            return $this->email;
        }
        function getPassword() {
            return $this->password = password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT, ['cost' => 4]);
        }

        function setID($id) {
            $this->id = $id;
        }
        function setNombre($nombre) {
            $this->nombre = $this->db->real_escape_string($nombre);
        }
        function setApellido($apellido) {
            $this->apellido =  $this->db->real_escape_string($apellido);
        }
        function setEmail($email) {
            $this->email = $this->db->real_escape_string($email);
        }
        function setPassword($password) {
            $this->password = $password;
           // 
        }

        public function save() {
            $sql = "INSERT INTO `usuario`(`idUser`, `nomUser`, `apeUser`, `emailUser`, `pasUser`) 
            VALUES (null,'{$this->getNombre()}','{$this->getApellido()}','{$this->getEmail()}','{$this->getPassword()}');";
            $save = $this->db->query($sql);

            $result = false;
            if($save) {
                $result = true;
            }
            return $result;
        }
    
        public function login() {
            $result = false;
            $email = $this->email;
            $password = $this->password;

            $sql = "SELECT * FROM usuario WHERE emailUser = '$email'";
            $login = $this->db->query($sql);
            
            if($login && $login->num_rows == 1) {
                $usuario = $login->fetch_object();
                
                $verify = password_verify($password, $usuario->pasUser);
                
                if($verify) {
                    $result = $usuario;
                } 
            }
            return $result;
        }

        public function edit() {
            $sql = "UPDATE usuario SET nomUser='{$this->getNombre()}', apeUser='{$this->getApellido()}' ";
            $sql .= "WHERE idUser={$this->getID()}";
            
            $save = $this->db->query($sql);

            $result = false;
            if($save) {
                $result = true;
            }
            return $result;
        }
    }
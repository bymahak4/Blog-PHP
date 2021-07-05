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
        
        public function save() {
            $sql = ""; /*6.50 insert*/
            $save = $this->db->query($sql);
        }
    
    
    }
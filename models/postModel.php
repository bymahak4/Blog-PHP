<?php 

    class post {
        public $id;
        public $titulo;
        public $contenido;
        public $fecha;
        public $hora;
        public $idUsuario;
        public $emailUsuario;
        private $db;
        
        public function __construct() {
            $this->db = database::connect();
        }

        public function getId() {
            return $this->id;
        }
        public function getTitulo() {
            return $this->titulo;
        }
        public function getContenido() {
            return $this->contenido;
        }
        public function getFecha() {
            return $this->fecha;
        }
        public function getHora() {
            return $this->hora;
        }
        public function getIdUsuario() {
            return $this->idUsuario;
        }
        public function getEmailUsuario() {
            return $this->emailUsuario;
        }
        
        public function setId($id) {
            $this->id = $id;      
        }
        public function setTitulo($titulo) {
            $this->titulo = $this->db->real_escape_string($titulo);   
        }
        public function setContenido($contenido) {
            $this->contenido = $this->db->real_escape_string($contenido); 
        }
        public function setFecha($fecha) {
            $this->fecha = $fecha;   
        }
        public function setHora($hora) {
            $this->hora = $hora;  
        }
        public function setIdUsuario($idUsuario) {
            $this->idUsuario = $idUsuario;
        }
        public function setEmailUsuario($emailUsuario) {
            $this->emailUsuario = $emailUsuario;
        }

        

    

        public function getAll() {
            $post = $this->db->query("SELECT u.nomUser, p.titPost, p.contPost, p.fechPost, p.horaPost
            FROM usuario u
            INNER JOIN post p
            ON (u.idUser = p.idUser) AND (u.emailUser = p.emailUser);");
            return $post;
        }

        public function save() {
            $sql = "INSERT INTO `post`(`idPost`, `titPost`, `contPost`, `fechPost`, `horaPost`, `idUser`, `emailUser`) 
            VALUES (null,'{$this->getTitulo()}','{$this->getContenido()}','{$this->getFecha()}','{$this->getHora()}','{$this->getIdUsuario()}','{$this->getEmailUsuario()}');";
            $save = $this->db->query($sql);
           
            $result = false;
            if($save) {
                $result = true;
            }
            return $result;
            
        }

        public function getMyPost() {
            $mypost = $this->db->query("SELECT u.nomUser, p.idPost, p.titPost, p.contPost, p.fechPost, p.horaPost 
            FROM usuario u
            INNER JOIN post p
            ON (u.idUser = p.idUser) AND (u.emailUser = p.emailUser)
            WHERE u.idUser = {$this->getIdUsuario()};");
            return $mypost;
        }

        public function delete() {
            $sql = "DELETE FROM `post` WHERE idPost = {$this->id};";
            $delete = $this->db->query($sql);
            
            $result = false;
            if($delete) {
                $result = true;
            }
            return $result;
        }
        
    }
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
            $post = $this->db->query("SELECT u.nomUser, p.titPost, p.contPost, fechPost, horaPost 
            FROM usuario u
            INNER JOIN post p
            INNER JOIN realiza r
            ON (u.idUser = r.idUser) AND (u.emailUser = r.emailUser) AND (p.idPost = r.idPost);");
            return $post;
        }

        public function save() {
            $sql = "INSERT INTO `post`(`idPost`, `titPost`, `contPost`, `fechPost`, `horaPost`) 
            VALUES (null,'{$this->getTitulo()}','{$this->getContenido()}','{$this->getFecha()}','{$this->getHora()}');";
            $save = $this->db->query($sql);
            
            $sql2 = "INSERT INTO `realiza`(`idPost`, `idUser`, `emailUser`) 
            VALUES ('{$this->getId()}','{$this->getIdUsuario()}','{$this->getEmailUsuario()}');";
            $save2 = $this->db->query($sql2);
            
            $result = false;
            if($save && $save2) {
                $result = true;
            }
            return $result;
            
        }

        
    }
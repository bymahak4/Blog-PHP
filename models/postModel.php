<?php 

    class post {
        private $id;
        private $titulo;
        private $contenido;
        private $fecha;
        private $hora;
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
        
        public function setId($id) {
            $this->id = $id;      
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;   
        }
        public function setContenido($contenido) {
            $this->contenido = $contenido; 
        }
        public function setFecha($fecha) {
            $this->fecha = $fecha;   
        }
        public function setHora($hora) {
            $this->hora = $hora;  
        }


        public function getAll() {
            $post = $this->db->query("SELECT u.nomUser, p.titPost, p.contPost, fechPost, horaPost 
            FROM usuario u
            INNER JOIN post p
            INNER JOIN realiza r
            ON (u.idUser = r.idUser) AND (u.emailUser = r.emailUser) AND (p.idPost = r.idPost);");
            return $post;
        }


    }
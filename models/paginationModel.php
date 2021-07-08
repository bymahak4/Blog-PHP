<?php

    class PaginationModel {
        private $db;

        public function __construct() {
            $this->db = database::connect();
        }
        public function Paginate($table) {
            try {
                $sql = "SELECT count(*) as total FROM ". $table;
                $save = $this->db->prepare($sql);
                $save->execute();
                $rows = $save->fetch();
                return $rows;
            } catch (PDOException $error) {
                echo $error->getMessage();
            }
            
        }
    }
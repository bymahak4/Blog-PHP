<?php

    class PaginationModel {
        private $db;

        public function __construct() {
            $this->db = database::connect();
        }
        public function Paginate($table) {
            try {
                $sql = "SELECT count(*) as total FROM ". $table;
                $save = $this->db->query($sql);
                $rows = $save->fetch_array();
                return $rows;
            } catch (PDOException $error) {
                echo $error->getMessage();
            }
            
        }
    }
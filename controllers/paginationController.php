<?php 
require_once 'models/paginationModel.php';

    class PaginationController {
        private $pm;

        public function __construct() {
            $this->pm = new PaginationModel();
        }
        public function Paginate($table, $size) {
            $rows = $this->pm->Paginate($table); 
            $pages = $rows[0]/$size;
            return $pages; 
        }
    }
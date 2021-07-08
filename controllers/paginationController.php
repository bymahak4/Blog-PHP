<?php 
require_once 'models/paginationModel.php';

    class PaginationController {
        private $pm;

        public function __construct() {
            $this->pm = new PaginationModel();
        }
        public function Paginate($table, $size) {
            $rows = $this->pm->Paginate($table);
            //var_dump($rows);
            //die();
            $pages = $size / $rows;
            //var_dump($pages);
            //die();
            return $pages;
            //echo $pc->Paginate("post","1");
        }
    }
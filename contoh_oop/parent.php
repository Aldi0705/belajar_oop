<?php
    class komputer {
        public function __construct(){
            echo "Constructor dari class komputer <br />";
        }
        public function __destruct(){
            echo "Destruct dari class komputer <br />";
        }
    }
    class laptop extends komputer {
        public function __construct (){
            parent::__construct();
            echo "Constructor dari class laptop <br />";
        }
        public function __destruct(){
            parent::__destruct();
            echo "Destruct dari class laptop <br />";
        }
    }
    class chromebook extends laptop {
        public function __construct(){
            parent::__construct();
            echo "Construct dari class chromebook";
        }
        public function __destruct(){
            parent::__destruct();
            echo "Destruct dari class chromebook <br />";
        }
    }

    $gadget_baru = new chromebook();

    echo "Belajar OOP PHP <br />";
?>
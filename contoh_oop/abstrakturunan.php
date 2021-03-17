<?php
    abstract class laptop{
        abstract function lihat_spec();
    }
    class komputer extends laptop{
        public function lihat_spec(){
            return "lihat spek komputer";
        }

        public function beli_laptop(){
            return "beli komputer";
        }
    }

    $komputer_baru = new komputer();

    echo $komputer_baru->lihat_spec();
    echo "<br />";
    echo $komputer_baru->beli_laptop();
?>
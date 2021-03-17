<?php
    abstract class laptop{
        abstract function lihat_spec();
    }
    class komputer extends laptop{
        public function beli_laptop(){
            return "beli komputer";
        }
    }

    $komputer_baru = new komputer();
?>
<?php
    final class komputer{
        public function lihat_spec(){
            return "Aceh core i3";
        }
    }

    class laptop extends komputer{
        public function lihat_spec(){
            return "asus core i5";
        }
    }

    $laptop_baru = new laptop();

    echo $laptop_baru->lihat_spec();
?>
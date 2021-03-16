<?php
    class laptop{
        public $merk;
        public $pemilik;

        public static $hargabeli;

        public static function beli_laptop(){
            return "beli laptop seharga : Rp".self::$hargabeli;
        }
    }

    laptop::$hargabeli=4000000;

    echo laptop::beli_laptop();
?>
<?php
    class laptop{
        public $merk;
        public $pemilik;

        public static $hargabeli;

        public static function beli_laptop(){
            return "Beli Laptop";
        }
    }

    laptop::$hargabeli=400000;

    echo "harga beli : Rp".laptop::$hargabeli;
    echo "<br />";
    echo laptop::beli_laptop();
?>
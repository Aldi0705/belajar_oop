<?php
    class laptop{
       public static function beli_laptop(){
           return "silahkan dibeli";
       }
    }
    class komputer extends laptop{
        public static $hargabeli;

        public static function beli_komputer(){
            return "harga komputer".self::$hargabeli;
        }
    }

    komputer::$hargabeli=30000;

    echo parent::beli_laptop;
    echo "<br />";
    echo komputer::beli_komputer;
?>
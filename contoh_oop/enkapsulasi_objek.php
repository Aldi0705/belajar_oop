<?php
    class laptop{
        // buat protect property
        protected $pemilik="anto";

        public function akses_pemilik(){
            return $this->pemilik;
        }
        protected function hidupkan_laptop(){
            return "Hidupkan Laptop";
        }
        public function akses_laptop(){
            return $this->hidupkan_laptop();
        }
    }

    $laptop_anto = new laptop();

    echo $laptop_anto->akses_pemilik();
    echo "<br />";
    echo $laptop_anto->akses_laptop();

?>
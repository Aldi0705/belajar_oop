<?php
    class laptop
    {
        public $pemilik;
        public $merk;

        public function hidupkan_laptop()
        {
            return "Hidupkan Laptop $this->merk punya $this->pemilik";
        }

        public function matikan_laptop()
        {
            return "Matikan Laptop $this->merk punya $this->pemilik";
        }

        public function restart_laptop()
        {
            $matikan=$this->matikan_laptop();
            $hidupkan=$this->hidupkan_laptop();
            $restart=$matikan. "<br />" .$hidupkan;
            return $restart;
        }
    }

    $laptop_anto= new laptop();

    $laptop_anto->pemilik="anto";
    $laptop_anto->merk="acer";

    echo $laptop_anto->hidupkan_laptop();
    echo "<br/>";
    echo $laptop_anto->matikan_laptop();
    echo "<br/>";
    echo $laptop_anto->restart_laptop();
?>
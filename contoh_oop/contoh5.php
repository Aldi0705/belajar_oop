<?php
    class laptop{
        public $pemilik="andi";

        public function hidupkan_laptop()
        {
            return "Hidupkan laptop $this->pemilik";
        }
    }

    $laptop_baru = new laptop();
    echo $laptop_baru->hidupkan_laptop();

    $laptop_baru->pemilik="dania";
    echo $laptop_baru->hidupkan_laptop();
    
    $laptop_lama = new laptop();
    echo $laptop_lama->hidupkan_laptop();
?>
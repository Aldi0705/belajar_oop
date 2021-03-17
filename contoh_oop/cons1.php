<?php
    class laptop{
        const R = '12000';

        public function beli_laptop($harga){
            return "Beli Komputer baru, Rp".$harga*self::R;
        }
    }

    $laptop_baru = new laptop();

    echo $laptop_baru->beli_laptop(400);
?>
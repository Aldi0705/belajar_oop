<?php
    // class 
    class laptop{
        // property untuk class laptop
        var $pemilik;
        var $merk;
        var $ukuran_layar;

        // method untuk class laptop
        // buat method untuk class laptop
        function hidupkan_laptop() {
            return "Hidupkan Laptop";
        }
        function matikan_laptop() {
            return "Matikan Laptop";
        }
    }
    // object untuk class laptop

    $laptop_anto = new laptop();

    // set property

    $laptop_anto->pemilik="anto";
    $laptop_anto->merk="acer";
    $laptop_anto->ukuran_layar="12 inc";

    // tampilan property
    echo $laptop_anto->pemilik;
    echo "<br />";
    echo $laptop_anto->merk;
    echo "<br />";
    echo $laptop_anto->ukuran_layar;
    echo "<br />";

   
    // tampilan method
    echo $laptop_anto->hidupkan_laptop();
    echo "<br />";
    echo $laptop_anto->matikan_laptop();
?>
<?php
    class komputer{
        protected $jenis_processor="intel core i3";
    }
    class laptop extends komputer{
        public function tampilkan_processor()
            
        {
            return $this->jenis_processor;
        }
    }

    $laptop_andi= new laptop(); 
    echo $laptop_andi->tampilkan_processor();
?>
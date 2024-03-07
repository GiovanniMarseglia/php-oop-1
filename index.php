<?php

    class Movie{
        public $id;
        public $name;
        public $datauscita;
        public function __construct($_id,$_name,$_datauscita) {
            $this->id = $_id;
            $this->name = $_name;
            $this->datauscita = $_datauscita;
        }
        public function stampamovie(){
            echo "id:" . $this->id . " ";
            echo "nome:" . $this->name . " ";
            echo "data di uscita:" . $this->datauscita . " ";
            echo "<br>";
        }
    }

    $primo=new Movie(1,'LA ZONA D INTERESSE','23/03/22');
    $primo->stampamovie();
    
    
        $secondo=new Movie(2,'DRIVE-AWAY DOLLS','20/05/21');
        $secondo->stampamovie();
        
    
    

<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->



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
    ?>
    <?php
        $secondo=new Movie(2,'DRIVE-AWAY DOLLS','20/05/21');
        $secondo->stampamovie();
        ?>
    
    

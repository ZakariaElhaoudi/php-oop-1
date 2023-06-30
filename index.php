<?php
    class movie {

        public $title;
        public $lang;
        public $country;

        public function __construct($title, $lang, $country) {

            $this -> title = $title;
            $this -> lang = $lang;
            $this -> country = $country;
        }


        public function getMovie() {

            return $this -> title. " " . $this -> lang  . $this -> country;
        }
    }

    $movie1 = new movie("Pirati dei Caraibi" , "EN" , "USA",);
    var_dump($movie1);

    echo $movie1->getMovie();
?>

<?php

    class Movie {

        public $title;
        public $lang;
        public $genres = array();
        public $country;

        public function __construct($title, $lang,$genres, $country) {

            $this -> title = $title;
            $this -> lang = $lang;
            $this -> genres = $genres;
            $this -> country = $country;
        }


        public function getMovieDetails() {

            $genreString = implode(", ", $this->genres);
            return $this -> title. " " . $this -> lang.  " ". $genreString . " " . $this -> country;
        }
    }

?>
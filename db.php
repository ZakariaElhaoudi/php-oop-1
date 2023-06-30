<?php

include __DIR__ . '/models/movie.php';
    
    $movie1 = new MovieClass("Pirati dei Caraibi" , "EN", ["Adventure", "Action", "Fantasy"] , "USA");
    
    $movie1 = new MovieClass("Pirati dei Caraibi 2" , "EN", ["Adventure", "Action", "Fantasy"] , "USA");
    $movie2 = new MovieClass("Spiderman 2 " , "EN", ["Fantasy", "Action", "Superhero"] , "USA");
    $movie3 = new MovieClass("Pirati dei Caraibi 3" , "EN", ["Adventure", "Action", "Fantasy"] , "USA");
    $movie4 = new MovieClass("Pirati dei Caraibi 4" , "EN", ["Adventure", "Action", "Fantasy"] , "USA");
    $movie5 = new MovieClass("Spiderman 1" , "EN", ["Fantasy", "Action", "Superhero"] , "USA");
    $movie6 = new MovieClass("Spiderman 2 " , "EN", ["Fantasy", "Action", "Superhero"] , "USA");
    $movie7 = new MovieClass("Spiderman 3" , "EN", ["Fantasy", "Action", "Superhero"] , "USA");
   
           

    $movies = [$movie1, $movie2,$movie3, $movie4,$movie5, $movie6, $movie7];
?>

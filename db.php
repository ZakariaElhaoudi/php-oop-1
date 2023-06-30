<?php

include __DIR__ . '/models/movie.php';
    
    $movie1 = new Movie("Pirati dei Caraibi" , "EN", ["Adventure", "Action", "Fantasy"] , "USA");
    $movie2 = new Movie("Spiderman" , "EN", ["Fantasy", "Action", "Superhero"] , "USA");
           

    $movies = [$movie1, $movie2];
?>

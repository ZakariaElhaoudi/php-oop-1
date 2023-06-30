<?php
    
    include __DIR__ . '/db.php';
    include __DIR__ . '/models/movie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Movies</title>
</head>
<body>
    <div>
        <h1>Lista Film</h1>
        <ul>
            <?php foreach ($movies as $movie) { ?>
                <li>
                    <?php echo $movie->getMovieDetails(); ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
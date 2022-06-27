<?php
    require __DIR__ . '/classes/Movie.php';

    $movies = [
        new movie('Spider-Man: No Way Home', 'Azione/Avventura', '2h 28m', 'Jon Watts', 2021),
        new movie('Spider-Man', 'Azione/Sci-fi', '2h 1m', 'Sam Raimi', 2002)
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach ($movies as $movie) { ?>
            <li>
                <h3><?= $movie->titolo ?></h3>
                <h4><?= $movie->genere ?></h4>
                <h4><?= $movie->durata ?></h4>
                <h5><?= $movie->regia ?></h5>
                <h5><?= $movie->anno ?></h5>
            </li>
       <?php } ?>   
    </ul>
</body>
</html>
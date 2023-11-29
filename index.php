<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';

$movie_TPB = new Movie("La Storia Fantastica - The Princess Bride", "Inglese", "8", "10000", "97" );

$movie_Sdust = new Movie("Stardust", "Inglese", "7", "20000", "120");
$movie_MR = new Movie("Moulin Rouge!", "Americano", "9", "18000", "110" ); 
$movie_J = new Movie("Jumanji", "Inglese", "9", "190000", "100");
$movie_C = new Movie("Casper", "Inglese", "7", "200000", "80");



// var_dump($movie_TPB, $movie_Sdust, $movie_MR);


$movies = [
    $movie_TPB, 
    $movie_Sdust,
    $movie_MR,
    $movie_J,
    $movie_C,
];
// var_dump($movies)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Productions</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Lista dei miei film preferiti</h1>
    <div class="container">
        <table class="table table-primary">
        <thead>
            <tr>
                <th class= "col-3" scope="col">Titolo</th>
                <th class= "col-1" scope="col">Lingua</th>
                <th class= "col-1" scope="col">Voto</th>
                <th class= "col-3" scope="col">Descrizione</th>
                <th class= "col-4" scope="col">Informazioni</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($movies as $movie) { ?>
            <tr>
                <td><?= $movie->title ?></td>
                <td><?= $movie->language ?></td>
                <td><?= $movie->getRating() ?></td>
                <td><?= $movie->description() ?></td>
                <td>info</td>
            </tr>
            <?php  }  ?>
        </tbody>
    </table>
    </div>


</body>
</html>
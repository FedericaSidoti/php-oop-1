<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . "/Models/Series.php";

$movie_TPB = new Movie("La Storia Fantastica - The Princess Bride", "Inglese", "8", "10000", "97" );
$movie_Sdust = new Movie("Stardust", "Inglese", "7", "20000", "120");
$movie_MR = new Movie("Moulin Rouge!", "Americano", "9", "18000", "110" ); 
$movie_J = new Movie("Jumanji", "Inglese", "9", "190000", "100");
$movie_C = new Movie("Casper", "Inglese", "7", "200000", "80");
$serie_ST = new Serie("Stranger Things", "Inglese", "10", "4");
$serie_GOT = new Serie("Game of Thrones", "inglese", "9", "8");
$serie_HD = new Serie("House of Dragons", "inglese", "9", "1");
$serie_GO = new Serie("Good Omens", "Inglese", "8", "2");
$serie_L = new Serie("Lucifer", "Inglese", "7", "6" );



// var_dump($movie_TPB, $movie_Sdust, $movie_MR);


$productions = [
    $movie_TPB, 
    $movie_Sdust,
    $movie_MR,
    $movie_J,
    $movie_C,
    $serie_ST,
    $serie_GOT,
    $serie_HD,
    $serie_GO,
    $serie_L
];

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
    <h1 class="text-center">Lista delle mie produzioni preferite</h1>
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
        <?php foreach($productions as $production) { ?>
            <tr>
                <td><?= $production->title ?></td>
                <td><?= $production->language ?></td>
                <td><?= $production->getRating() ?></td>
                <td><?= $production->description(), $production -> getInfo() ?></td>
                <td> <?php $production->getMoreInfo() ?> </td>
            </tr>
            <?php  }  ?>
        </tbody>
    </table>
    </div>


</body>
</html>
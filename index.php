<?php
class Production {
    public $title; 
    public $language;
    public $rating; 
    
    public function __construct($name, $lang, $vote) {
        $this -> title = $name; 
        $this -> language = $lang; 
        $this -> setRating($vote); 
    }
    public function setRating($vote){
        if (is_numeric($vote) && $vote >= 0) {
            $this->rating = intval($vote);
        } else {
        $this->rating = null;
        var_dump('Votazione non disponibile');
        }
    }
    public function getRating() {
        return $this->rating ; 
    }

    public function description() {
        echo "$this->title : si tratta di un film con lingua originale $this->language. Votazione utenti: $this->rating. ";
    }
    
};

$movie_TPB = new Production("La Storia Fantastica - The Princess Bride", "Inglese", "8" );

$movie_Sdust = new Production("Stardust", "Inglese", "7");
$movie_MR = new Production("Moulin Rouge!", "Americano", "9" ); 
$movie_J = new Production("Jumanji", "Inglese", "9");
$movie_C = new Production("Casper", "Inglese", "7");



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
                <th class= "col-4" scope="col">Titolo</th>
                <th class= "col-2" scope="col">Lingua</th>
                <th class= "col-1" scope="col">Voto</th>
                <th class= "col-5" scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($movies as $movie) { ?>
            <tr>
                <td><?= $movie->title ?></td>
                <td><?= $movie->language ?></td>
                <td><?= $movie->getRating() ?></td>
                <td><?= $movie->description() ?></td>
            </tr>
            <?php  }  ?>
        </tbody>
    </table>
    </div>


</body>
</html>
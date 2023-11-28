<?php
class Production {
    public $title; 
    public $language;
    public $rating; 

    public function __construct($name, $lang, $vote) {
        $this -> title = $name; 
        $this -> language = $lang; 
        $this -> rating = $vote; 
    }
};

$movie_TPB = new Production("La Storia Fantastica - The Princess Bride", "Inglese", "8" );
// var_dump($movie_TPB)
$movie_Sdust = new Production("Stardust", "Inglese", "7");
$movie_MR = new Production("Moulin Rouge!", "Americano", "9" ); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Productions</title>
</head>
<body>
    
</body>
</html>
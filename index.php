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
    
};

$movie_TPB = new Production("La Storia Fantastica - The Princess Bride", "Inglese", "8" );

$movie_Sdust = new Production("Stardust", "Inglese", "7");
$movie_MR = new Production("Moulin Rouge!", "Americano", "9" ); 


var_dump($movie_TPB, $movie_Sdust, $movie_MR);
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
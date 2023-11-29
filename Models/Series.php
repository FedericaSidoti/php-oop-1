<?php 

require_once __DIR__ . '/Production.php';

class Serie extends Production {
    public $seasons ; 

    function __construct(String $title, $language, Int $rating, Int $seasons) {

        parent::__construct($title, $language, $rating);
            $this -> setSeasons($seasons);
    }
    // getters
    public function setSeasons($seasons) {
        $this->seasons = $seasons; 
    }
    //setters
    public function getSeasons(){
        return $this->seasons;
    }
}
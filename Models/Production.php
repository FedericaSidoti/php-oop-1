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

?>
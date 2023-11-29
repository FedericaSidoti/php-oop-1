<?php 

require_once __DIR__ . '/Production.php';

class Movie extends Production {
    public $profit ; 
    public $duration;

    function __construct(String $title, $language, Int $rating, Int $profit, Int $duration) {

        parent::__construct($title, $language, $rating);
            $this -> setProfit($profit);
            $this -> setDuration($duration);
    }
    // getters
    public function setProfit($profit) {
        $this->profit = $profit; 
    }
    public function setDuration($duration) {
        $this->duration = $duration;
    }
    //setters
    public function getProfit(){
        return $this->profit;
    }
    public function getDuration(){
        return $this->duration; 
    }
    //methods 
    public function getInfo() {
        echo "I profitti sono stati di $this->profit euro e la durata del film è di $this->duration minuti. ";
    }
}

// var_dump( new Movie('Pippo', 'aramaico','3','10', '6'))

?>
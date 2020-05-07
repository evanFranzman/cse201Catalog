<?php
class Reviews{
    //instance variables
    private $game = null;
    private $date = null;
    private $review = null;
    private $replies = null;
    
    //constructor
    public function  _construct($review, $game, $date, $replies) {
        $this->review = $review;
        $this->game = $game;
        $this->date = $date;
        $this->replies = $replies;
    }
    
    //getters
    //methods that get their respective variable 
    public function getReview() {
        return $this->review;
    }
    
    public function getGame(){
        return $this->game;
    }
    
    public function getDate(){
        return $this->date;
    }
    
     public function getReplies(){
        return $this->replies;
    }
    
    //setters
    //methods that set their respective variable 
    public function setReview($review) {
        $this->review = $review;
    }    
    
    public function setGame($game){
        $this->game = $game;
    }    
    
    public function setDate(string $date){
        $this->date = $date;
    }   
    
    public function setReplies(string $replies){
        $this->replies = $replies;
    }
}
?>

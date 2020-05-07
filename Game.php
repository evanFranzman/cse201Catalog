<?php

//connection code 
//(if on the server, it should connect to the server)
$conn = mysql_connect('localhost','root','root');
mysql_select_db("Game");

//checks the connection 
if($conn){
    echo "connected";
} else {
    echo "i hate you";
}

class Game {
    //instance variables
    private $gameId = null;
    private $gameName = null;
    private $userId = null;
    private $genreTypeId = null;
    private $releaseDate = null;
    private $currentVersion = null;
    private $websiteLink = null;
    private $logoId = null;

    //constructor using all of the instance variables 
    function _construct($gameId, $gameName, $userId, $genreTypeId, $releaseDate, $currentVersion,
        $websiteLink, $logoId){
            $this->gameId = $gameId;
            $this->gameName = $gameName;
            $this->userId = $userId;
            $this->genreTypeId = $genreTypeId;
            $this->currentVersion = $currentVersion;
            $this->releaseDate = $releaseDate;
            $this->currentVersion = $currentVersion;
            $this->websiteLink = $websiteLink;
            $this->logoId = $logoId;
  }  
  
  //getters 
  //methods that get their respective variables
  public function getGameId(){
      return $this->gameId;
  }
  
  
  public function getGameName(){
      return $this->gameName;
  }
  
  
  public function getUserId(){
      return $this->userId;
  }
  
  public function getGenreTypeId(){
      return $this->genreTypeId;
  }
  
  public function getReleaseDate(){
      return $this->releaseDate;
  }
  
  public function getCurrentVersion(){
      return $this->currentVersion;
  }
  
  public function getWebsiteLink(){
      return $this->websiteLink;
  }
  
  //getter function that deals with grabbing information from the server 
  public function getLogoId(){
      return SELECT * FROM Games.Logos where logoId = $this->logoId;
  }
  
  //setters
  //methods that set their respective variable 
  public function setGameId($gameId){
      $this->gameId = $gameId;
  }
  
  public function setGameName($gameName){
      $this->gameName = $gameName;
  }
  
  public function setUserId($userId){
      $this->userId = $userId;
  }
  
  public function setGenreTypeId($genreTypeId){
      $this->genreTypeId = $genreTypeId;
  }
  
  public function setReleaseDate($releaseDate){
      $this->releaseDate = $releaseDate;
  }
  
  public function setCurrentVersion($currentVersion){
      $this->currentVersion = $currentVersion;
  }
  
  public function setWebsiteLink($websiteLink){
      $this->websiteLink = $websiteLink;
  }
  
  public function setLogoId($logoId){
      $this->logoId = $logoId;
  }  
}
?>

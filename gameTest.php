<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

//included Game class because test would not work otherwise 
class Game {
    //instance variables
    private $gameId;
    private $gameName;
    private $userId;
    private $genreTypeId;
    private $releaseDate;
    private $currentVersion;
    private $websiteLink;
    private $logoId;

    //constructor 
    function _construct($gameId, $gameName, $userId, $genreTypeId, $releaseDate, $currentVersion,
        $websiteLink, $logoId){
            $this->gameId = $gameId;
            $this->gameName = $gameName;
            $this->userId = $userId;
            $this->genreTypeId = $genreTypeId;
            $this-> currentVersion = $currentVersion;
            $this->releaseDate = $releaseDate;
            $this->currentVersion = $currentVersion;
            $this->websiteLink = $websiteLink;
            $this->logoId = $logoId;
  }  
  
  //getters 
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
  
  //setters
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

//specific inheritance in order to function with phpunit
final class GameTest extends TestCase
{
    //tests the getGameId() function
	public function testGetGameId(): void{
        //test game 
        $test = new Game();
        $test->setGameId(1);           
        //should pass
        $this->assertEquals(1,$test->getGameId());
        //should return false 
        $this->assertFalse($test->getGameId() == 3830);
    }
    
    //tests the getGameName() function
    public function testGetGameName(): void{
        //test game
        $test = new Game();
        $test->setGameName("Bayonetta 2");
        //should pass
        $this -> assertEquals("Bayonetta 2", $test->getGameName());
        //should return false
        $this->assertFalse($test->getGameName() == "Bayonetta 3");
    }
    
    //tests the getUserId() function
    public function testGetUserId(): void{
        //test game
        $test = new Game();
        $test->setUserId(2);
        //should pass 
        $this->assertEquals(2,$test->getUserId());
        //should return false
        $this->assertFalse($test->getUserId() == 3830);
    }
    
    //tests the getGenreType() function
    public function testGetGenreType(): void{
        //test game
        $test = new Game();
        $test->setGenreTypeId(1);
        //should pass
        $this -> assertEquals(1,$test->getGenreTypeId());
        //should return false
        $this->assertFalse($test->getGenreTypeId() == 3830);
    }
    
    //tests the getReleaseDate() function
    public function testGetReleaseDate(): void{
        //test game
        $test = new Game();
        //since the original $date variable is unspecified in terms of 
        //its type, it technically be a string or DateInterval object
        $test->setReleaseDate(new DateInterval("P2014Y9M20D"));
        //might not work but we'lllll see
        //actually this works lul
        $this->assertEquals(new DateInterval("P2014Y9M20D"), $test->getReleaseDate());
        //should return false
        $this->assertFalse($test->getReleaseDate() == new DateInterval("P2020Y2M20D"));
    }
    
    //tests the getCurrentVersion() function
    public function testGetCurrentVersion(): void{
        //test game
        $test = new Game();
        $test->setCurrentVersion("1.0");
        //should pass
        $this->assertEquals("1.0", $test->getCurrentVersion());
        //should return false
        $this->assertFalse($test->getCurrentVersion() == "FINAL2.0");
    }
    
    //tests the getWebsiteLink() function
    public function testGetWebsiteLink(): void{
        //test game
        $test = new Game();
        $test->setWebsiteLink("https://www.nintendo.com/games/detail/bayonetta-2-digital-version-switch/");
        //should pass
        $this->assertEquals("https://www.nintendo.com/games/detail/bayonetta-2-digital-version-switch/", $test->getWebsiteLink());
        //should return false
        $this->assertFalse($test->getWebsiteLink() == "https://www.youtube.com/watch?v=dQw4w9WgXcQ");
    } 
}
?>

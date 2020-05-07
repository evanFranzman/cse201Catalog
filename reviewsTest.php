<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

//included Game class because test would not work otherwise 
class Game {
    //instance variables
    private $gameId = null;
    private $gameName = null;
    private $userId = null;
    private $genreTypeId = null;
    //since $releaseDate variable is unspecified in terms of
    //its type, it technically be a string or DateInterval object
    private $releaseDate = null;
    private $currentVersion = null;
    private $websiteLink = null ;
    private $logoId = null;
    
    //constructor
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

//included Review class because test would not work otherwise 
class Reviews{    
    private $game = null;
    //since the original $date variable is unspecified in terms of
    //its type, it technically be a string or DateInterval object
    private $date = null;
    private $review = null;
    private $replies = null;
    
    public function  _construct($review, $game, $date, $replies) {
        $this->review = $review;
        $this->game = $game;
        $this->date = $date;
        $this->replies = $replies;
    }
    
    function getReview() {
        return $this->review;
    }
    
    function setReview($review) {
        $this->review = $review;
    }
    
    function getGame(){
        return $this->game;
    }
    
    function setGame($game){
        $this->game = $game;
    }
    
    function getDate(){
        return $this->date;
    }
    
    function setDate(string $date){
        $this->date = $date;
    }
    
    function getReplies(){
        return $this->replies;
    }
    
    function setReplies(string $replies){
        $this->replies = $replies;
    }
}

//specific inheritance in order to function with phpunit
final class ReviewsTest extends TestCase
{
    //tests the getReview() function
    public function testGetReview(): void{
        //test game
        $testGame = new Game();
        $testGame->setGameId(0);
        $testGame->setGameName("hello world");
        $testGame->setUserId(0);
        $testGame->setGenreTypeId(0);
        $testGame->setReleaseDate("1/1/11");
        $testGame->setCurrentVersion("1.0");
        $testGame->setLogoId(0);
        
        //test review
        $test = new Reviews("hello world", $testGame, "1/1/11", "hello world");
        $test->setReview("hello world");
        //should pass
        $this->assertEquals("hello world",$test->getReview());
        //should return false
        $this->assertFalse($test->getReview() == "goodbye world");
    }
    
    //tests the getGame() function
    public function testGetGame(): void{
        //test game
        $testGame = new Game();
        $testGame->setGameId(0);
        $testGame->setGameName("hello world");
        $testGame->setUserId(0);
        $testGame->setGenreTypeId(0);
        $testGame->setReleaseDate("1/1/11");
        $testGame->setCurrentVersion("1.0");
        $testGame->setLogoId(0);
        
        //test review
        $test = new Reviews("hello world", $testGame, "1/1/11", "hello world");        
        $test->setGame($testGame);
        //should pass
        $this->assertEquals($testGame,$test->getGame());
    }
    
    //tests the getDate() function
    public function testGetDate(): void{
        //test game
        $testGame = new Game();
        $testGame->setGameId(0);
        $testGame->setGameName("hello world");
        $testGame->setUserId(0);
        $testGame->setGenreTypeId(0);
        $testGame->setReleaseDate("1/1/11");
        $testGame->setCurrentVersion("1.0");
        $testGame->setLogoId(0);
        
        //test review
        $test = new Reviews("hello world", $testGame, "1/1/11", "hello world");
        $test->setDate("1/1/11");
        //should pass
        $this->assertEquals("1/1/11",$test->getDate());
        //should return false
        $this->assertFalse($test->getDate() == "2/2/20");
    }
    
    //tests the getReplies() function
    public function testGetReplies(): void{
        //test game
        $testGame = new Game();
        $testGame->setGameId(0);
        $testGame->setGameName("hello world");
        $testGame->setUserId(0);
        $testGame->setGenreTypeId(0);
        $testGame->setReleaseDate("1/1/11");
        $testGame->setCurrentVersion("1.0");
        $testGame->setLogoId(0);
        
        //test review
        $test = new Reviews("hello world", $testGame, "1/1/11", "hello world");
        $test->setReplies("hello world");
        //should pass
        $this->assertEquals("hello world",$test->getReplies());
        //should return false
        $this->assertFalse($test->getReplies() == "goodbye world :(");
    }
}

?>

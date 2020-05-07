<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

//included User class because test would not work otherwise 
class User{
    private $userId = null;
    private $userName = null;
    private $userType = null;
    private $password = null;
    private $email = null;
    private $companyName = null;
    
    private function _construct(int $userId, string $userName, int $userType, string $password, string $email, string $companyName){
        $this->email 	   = $email;
        $this->userId 	   = $userId;
        $this->userName    = $userName;
        $this->userType    = $userType;
        $this->password    = $password;
        $this->companyName = $companyName;
    }
    
    //getters
    public function getUserId(){
        return $this->userId;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getUserType(){
        return $this->userType;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getCompanyName(){
        return $this->companyName;
    }
    
    //setters
    public function setUserId($userId){
        $this->userId = $userId;
    }
    
    public function setUserName($userName){
        $this->userName = $userName;
    }
    
    public function setUserType($userType){
        $this->userType = $userType;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function setCompanyName($companyName){
        $this->companyName = $companyName;
    }
    
    
    public function verifyLogin(string $email, string $password){
        if ($this->email == $email && $this->password == $password){
            return true;
        } else {
            return false;
        }
    }
}

final class UserTest extends TestCase
{
    //tests the getUserId() function
    public function testGetUserId(): void{
        //test user 
        $testUser = new User(0,"pandachamp",0,"butt","pandachamp@example.com", "PandaChamp Inc.");
        $testUser->setUserId(0);
        //should pass 
        $this->assertEquals(0,$testUser->getUserId());
        //should return false
        $this->assertFalse($testUser->getUserId() == 3830);
    }
    
    //tests the getUserName() function
    public function testGetUserName(): void{
        //test user
        $testUser = new User(0,"pandachamp",0,"butt","pandachamp@example.com", "PandaChamp Inc.");
        $testUser->setUserName("snekchamp");
        //should pass
        $this->assertEquals("snekchamp",$testUser->getUserName());
        //should return false 
        $this->assertFalse($testUser->getUserName() == "snakechamp");
    }
    
    //tests the getUserType() function 
    public function testGetUserType(): void{
        //test user
        $testUser = new User(0,"pandachamp",0,"butt","pandachamp@example.com", "PandaChamp Inc.");
        $testUser->setUserType(1);
        //should pass 
        $this->assertEquals(1,$testUser->getUserType());
        //should return false
        $this->assertFalse($testUser->getUserType() == 3830); 
        
    }
    
    //tests the getEmail() function
    public function testGetEmail(): void{
        //test user
        $testUser = new User(0,"pandachamp",0,"butt","pandachamp@example.com", "PandaChamp Inc.");
        $testUser->setEmail("pandapoggers@example.edu");
        //should pass 
        $this->assertEquals("pandapoggers@example.edu",$testUser->getEmail());
        //should return false 
        $this->assertFalse($testUser->getEmail() == "pandanotpoggers@sad.com");
    }
    
    //tests the getPassword() function
    public function testGetPassword(): void{
        //test user
        $testUser = new User(0,"pandachamp",0,"butt","pandachamp@example.com", "PandaChamp Inc.");
        $testUser->setPassword("buttMode");
        //should pass
        $this->assertEquals("buttMode",$testUser->getPassword());
        //should return false
        $this->assertFalse($testUser->getPassword() == "bootMode"); 
    }
    
    //tests the getCompanyName() function
    public function testGetCompanyName(): void{
        //test user
        $testUser = new User(0,"pandachamp",0,"butt","pandachamp@example.com", "PandaChamp Inc.");
        $testUser->setCompanyName("PandaChamp World Ltd.");
        //should pass
        $this->assertEquals("PandaChamp World Ltd.",$testUser->getCompanyName());
        //should return false 
        $this->assertFalse($testUser->getCompanyName() == "PandaKing World Ltd.");
        
    }
    
    //tests the verifyLogin(0 function 
    public function testVerifyLogin(): void{
        //test user
        $testUser = new User(0,"pandachamp",0,"butt","pandachamp@example.com", "PandaChamp Inc.");
        $testUser->setEmail("pandachamp@example.com");
        $testUser->setPassword("butt");
        //should pass
        $this->assertEquals(true, $testUser->verifyLogin("pandachamp@example.com", "butt"));
        //should return false (so test should pass)
        $this->assertFalse($testUser->verifyLogin("pandachamp@example.com", "happyButts"));
    }
}

?>

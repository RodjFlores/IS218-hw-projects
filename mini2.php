<html>

<?php
//FACTORY

class player{

  private $race;
  private $class;
  
  public function __construct($race, $class){

  	$this -> playerRace = $race;
  	$this -> playerClass = $class;

  }

  public function getPlayer(){

  	return $this -> playerRace.' '.$this ->playerClass;

  }
}

class playerFactory{

	public static function create($race, $class){

		return new player($race,$class);
	}
}
//decorator
interface playerGear{
	public function loadGear();
}
class gear implements playerGear{
	public function loadGear(){
		echo 'Which weapons to wield?<br />';
	}
}
abstract class gearDecorator implements playerGear{

	protected $playerGear;

	public function ___construct(playerGear $playerGear){
		$this ->playerGear=$playerGear;
	}

	abstract public function loadGear();
}	
class sword extends gearDecorator{
	public function loadGear(){
		echo 'Now wielding a Sword<br />';
		$this->playerGear->loadGear();
	}
}
class shield extends gearDecorator{
	public function loadGear(){
		echo 'Now wielding a Shield<br />';
		$this->playerGear->loadGear();
	}
}
class staff extends gearDecorator{
	public function loadGear(){
		echo 'Now wielding a Magic Staff<br />';
		$this->playerGear->loadGear();
	}
}

//character name maker get set
class namer{
    
    
    private $name;
    
    
    function __construct() {      
      $this->instanceName = 'NO NAME';
    }  
    
    public function getName() {
      return $this->instanceName;
    }  
    
    
    public function setName($nameIn) {
      $this->instanceName = $nameIn;
    }    
  
}

echo 'Player 1 is <br />';
$player1= new namer();
$player1->setName('Rod');
echo $player1->getName();
echo '<br>';

$hero = playerFactory::create('Human','Mage');
echo($hero->getPlayer());


echo '<br>';

$gear = new staff($gear);
$gear->loadGear();


echo'<br>';


echo'<br>';




?>

</html>
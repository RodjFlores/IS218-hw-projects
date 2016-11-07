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




//SINGLETON
class boss{

  public static function Instance(){

    static $inst = null;
    if($inst === null){
      $inst = new boss();
    }
  }

  private function __construct(){

    echo 'The Final Boss';
  }
}

//DECORATOR
interface playerStats{

  public function stats();
}
class stat implements playerStats{

  public function stats(){
    echo 'Normal Stats of <br />';
  }
}

abstract class statsDecorator implements playerStats{

  protected $stats;

  public function __construct(playerStats $stats){
    $this ->playerStats = $stats;
  }

  abstract public function stats();
}

class defence extends statsDecorator{

  public function stats(){

    echo 'added defence to: <br />';
    $this ->playerStats->stats();
  }
}

class attack extends statsDecorator{

  public function stats(){

    echo 'added attack to: <br />';
    $this ->playerStats->stats();
  }
}
//all the variables go here
//I can update the stats of the character or the boss



$hero = playerFactory::create('elf','warrior');
echo($hero->getPlayer());



echo'<br>';
echo 'VERSUS <br />';
$demon = boss::Instance();
echo $demon;
echo'<br>';
echo'<br>';

$main= new stat();

$main= new attack($main);

$main= new defence($main);


$main->stats();
echo($hero->getPlayer());






?>







</html>

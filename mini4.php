<html>
<?php
//Tried to make an  ingame name maker uing strategy

function nMake($name){
	if (strlen($name)>= 3 && strlen($name)<6){
		echo 'Al-'.$name; 
		echo'<br>';  
   }
   elseif(strlen($name)<=2){
   		echo 'Name is too Short!';
   		echo '<br>';
    }
    else{
    	echo $name.'-shurai';
    	echo '<br>';
    }
}
//Decorator for names for gain titles in a game
class Name{
	private $title;

	function __construct($title_in){
		$this ->title = $title_in;
	}

	function getTitle(){
		return $this->title;
	}

}

class NameDecorator{
	protected $title;
	protected $playerName;

	public function __construct(Name $playerName_in){
		$this->playerName =$playerName_in;
		$this -> resetTitle();
	}
	function showTitle(){
		return $this -> title;
	}

}

class kingName extends NameDecorator{

	private $nd;

	public function __construct(NameDecorator $nd_in){
		$this->nd=$nd_in;
	}
	function kingTitle(){
		$this->nd->title='KING '.$this->nd->title;
	}

}
class soldierName extends NameDecorator{

	private $nd;

	public function __construct(NameDecorator $nd_in){
		$this->nd=$nd_in;
	}
	function kingTitle(){
		$this->nd->title='General '.$this->nd->title;
	}

}

$name = 'Roda';
$name2 = 'r';
$name3 = 'Howtal';
nMake($name);
nMake($name2);
nMake($name3);

$playerName = new Name('RODA');

$titler= new NameDecorator($playerName);
$kinger = new kingName($titler);

writeln($titler->showTitle());



?>
</html>

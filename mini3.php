<html>
<?php
//generic weapon factory pattern
class weaponFactory {
 
	public function __construct() {
      
    }
 
    public static function build ($type = '') {
             
        if($type == '') {
            throw new Exception('Invalid Weapon');
        } else {
 
            $itemName = 'item_'.ucfirst($type); 
          
            if(class_exists($itemName)) {
                return new $itemName();
            } else {
                throw new Exception('Weapon not found.');
            }
        }
    }
}
class item_Sword{
	public function __construct(){
		echo 'Forging Sword';
	}
}
class item_Spear{
	public function __construct(){
		echo 'Forging Spear';
	}
}
class item_Axe{
	public function __construct(){
		echo 'Forging Axe';
	}
}

//THIS basic pattern show the type of weapon it is
function weaponType($fname) {
    
    if($fname == 'sword'){
      echo 'Slash';
      echo'<br>';
    }
    elseif($fname == 'axe'){
      echo 'Hack';
      echo'<br>';
    }
    elseif($fname == 'spear'){
      echo 'Pierce';
      echo'<br>';
     } 
    else{
      echo 'Invalid Weapon';
      echo'<br>';
      }
}

weaponType("spear");
weaponType("axe");
weaponType("spea");




  





//I feel as if; in a game, it would be hard to duped items if a singleton is used.

//SINGLETON
class wep{

  public static function Instance(){

    static $inst = null;
    if($inst === null){
      $inst = new wep();
    }
  }

  private function __construct(){

    echo 'The God Sword:';
    echo '<br>';
    echo 'One True Sword forged by the Gods';
  }
}


echo '<hr>';

$sword=weaponFactory::build('Sword');
echo'<br>';
$spear=weaponFactory::build('Spear');
echo'<br>';
$sword=weaponFactory::build('Axe');
echo'<br>';
echo '<hr>';
$lwep = wep::Instance();
echo $lwep;



?>
</html>


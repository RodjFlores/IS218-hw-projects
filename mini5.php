<html>
<?php
//I am not sure of how exactly observer works. Used a really good tutorial on this. I do not know how to use it with any other patterns
interface Observer {
    public function addCurrency(Currency $currency);
}
 
class priceSimulator implements Observer {
    private $currencies;
     
    public function __construct() {
        $this->currencies = array();
    }
     
    public function addCurrency(Currency $currency) {
        array_push($this->currencies, $currency);
    }
     
    public function updatePrice() {
        foreach ($this->currencies as $currency) {
            $currency->update();
        }
    }
}
 
interface Currency {
    public function update();
    public function getPrice();
}
 
class Pound implements Currency {
    private $price;
     
    public function __construct($price) {
        $this->price = $price;
        echo "<p>Pound Original Price: {$price}</p>";
    }
     
    public function update() {
        $this->price = $this->getPrice();
        echo "<p>Pound Updated Price : {$this->price}</p>";
    }
     
    public function getPrice() {
        return f_rand(0.65, 0.71);
    }
     
}
 
class Yen implements Currency {
    private $price;
 
    public function __construct($price) {
        $this->price = $price;
        echo "<p>Yen Original Price : {$price}</p>";
    }
 
    public function update() {
        $this->price = $this->getPrice();
        echo "<p>Yen Updated Price : {$this->price}</p>";
    }
     
    public function getPrice() {
        return f_rand(120.52, 122.50);
    }
     
}
 
function f_rand($min=0,$max=1,$mul=1000000){
    if ($min>$max) return false;
    return mt_rand($min*$mul,$max*$mul)/$mul;
}
 
$priceSimulator = new priceSimulator();
 
$c1 = new Pound(0.60);
$c2 = new Yen(122);
 
$priceSimulator->addCurrency($c1);
$priceSimulator->addCurrency($c2);
 
echo "<hr />";
$priceSimulator->updatePrice();
 
echo "<hr />";
$priceSimulator->updatePrice();
echo "<hr />";
echo "<hr />";
echo 'New originals';


$c3= new Pound(0.80);
$c4= new Yen(200);
$priceSimulator->addCurrency($c3);
$priceSimulator->addCurrency($c4);

echo "<hr />";
$priceSimulator->updatePrice();
 
echo "<hr />";
$priceSimulator->updatePrice();
?>
</html>

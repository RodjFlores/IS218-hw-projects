<html>
<p>
<b>1ST IF STATEMENT</b><br><br>
<?php
$first='one';

if(isset($first)){
  echo 'Variable First is SET!';

}
else{
  echo 'Variable is not set';
}
?>

<br><br><b>2ND IF STATEMENT</b><br><br>
<?php
$second=NULL;

if(is_null($second)){
  echo 'Variable Second is NULL';
  

}
?>
<br><br><b>3RD IF STATEMENT</b><br><br>
<?php
$third='';

if(empty($third)){
  echo 'Variable Third is EMPTY';

}
else{
  echo 'Variable is not set';
}
?>
<br><br><b>4TH IF STATEMENT</b><br><br>
<?php
$fourth='four';

if(empty($fourth)){
  echo 'Variable Fourth is EMPTY';

}
else{
  $fourth='';
}
echo 'Is $fourth empty?: '.$fourth.'   (if there is nothing the variable turned empty and passed the first if)';
?>
</p>



<p>
<br><br><b>1ST SWITCH STATEMENT</b><br><br>
<?php
    $fruit = "Apple";
    
    switch($fruit):
            
        case isset($fruit):
            echo '1st $fruit is set';
            break;
            
        default:
            echo 'Messed up the statement';
            
    endswitch;    
    ?>
<br><br><b>2ND SWITCH STATEMENT</b><br><br>
<?php
    $fruit = "";
    
    switch($fruit):
            
        case is_null($fruit):
            echo '2nd $fruit is NULL';
            break;
            
        default:
            echo 'Messed up the statement';
            
    endswitch;    
    ?>
<br><br><b>3RD SWITCH STATEMENT</b><br><br>
<?php
    $fruit = 0;
    
    switch($fruit):
            
        case empty($fruit):
            echo '3rd $fruit is EMPTY';
            break;
            
        default:
            echo 'Messed up the statement';
            
    endswitch;    
    ?>    
<br><br><b>4TH SWITCH STATEMENT</b><br><br>
<?php
    $fruit = "";
    
    switch($fruit):
            
        case isset($fruit):
            echo '$fruit is set';
        case empty($fruit):
            echo ' It is also empty';
        case is_null($fruit):
            echo ' It is also null and I will let the switch FALL THROUGH default---';
            
            
        default:
            echo 'Messed up the statement';
            
    endswitch;    
    ?>

</p>









</html>

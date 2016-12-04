<?php 
echo "SUPERGLOBALS"."<br>";
setcookie("test_cookie", "test", time() + 3600, '/');
#FOR LATER USE FOR COOKIES

#session also for later use!
$value = "PRE SESSION";
echo "remember this value for \$value-------- ".$value."<br>";
session_start();
$value = "SESSION VAL";
$_SESSION["newsession"]=$value;


?>
<html>
<?php


echo "<br><br>-----GLOBALS------------<br><br>";
function test() {
    $foo = "variable inside the function";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
    echo '$foo in current scope: ' . $foo . "<br>";
}

$foo = "Variable outside the function";
test();

# $ GLOBALS allowed to get the value of the same name variable from outside the scope and use it with that said value. Written in as an array

echo "<br><br>-----_SERVER------------<br><br>";

echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME'];

#this superglobal is used to obtain information regarding the server the file is running on. IN this example, I ran it on an njit sever, and got the actual path address of this exact php file.

echo "<br><br>-----_GET------------<br><br>";
?>

<form action="hw7.php" method="get">
Name: <input type="text" name="name"><br>

<input type="submit">

<?php
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';

#$_GET takes input from a form. Need input for it to work.

echo "<br><br>-----_POST------------<br><br>";
#HTML CODE below
?>

<form action="hw7.php" method="POST">
Name: <input type="text" name="name"><br>

<input type="submit">

<?php
echo 'NO OUTPUT HERE--instead goes to GET' . htmlspecialchars($_POST["name"]) . '!';

#$_POST takes input from a form. Need input for it to work. basically the same as _GET, but since there is a GET in the script, it goes there.

echo "<br><br>-----_FILE------------<br><br>";
#HTML CODE below
?>

<form enctype="multipart/form-data" action="hw7.php" method="POST">
    
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
<?php
echo htmlspecialchars($_FILES["userfile"]["type"]);

# i do not know why the $_file is not echoing out. I am trying to get the type. for notepad document, should be txt.
echo "<br><br>-----_COOKIE------------<br><br>";

if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
#THis tries to show the cookies are enabled. THe cookie I set in the very beginning.

echo "<br><br>-----_SESSION------------<br><br>";

echo $_SESSION["newsession"]. " and ".$value;


#Started a session from the beginning and now just echoing out that variable. Variable in a session keep their values. Different from another session. near the title the value for $value is pre session.

echo "<br><br>-----_REQUEST------------<br><br>";

var_dump($_REQUEST);
#This shows information about $_POST, $_GET,$_COOKIES, and $_FILES. IT shows what has been updated or stored in the server.

echo "<br><br>-----_ENV------------<br><br>";

echo 'My username is ' .$_ENV["USER"] . '!';
#not really sure what this does. it is emtpy

?>
</html>

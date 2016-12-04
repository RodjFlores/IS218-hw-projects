<?php

require_once "/afs/cad.njit.edu/u/r/j/rjf26/public_html/HW/Editor.php";
require_once "/afs/cad.njit.edu/u/r/j/rjf26/public_html/HW/Nettuts.php";
 
class ReflectionTest extends PHPUnit_Framework_TestCase {
 
    function testItCanReflect() {
        $editor = new Editor('John Doe');
        $tuts = new Nettuts();
        $tuts->publishNextArticle($editor);
    }
 
}
?>
<?php

class NetTuts {
 
    function publishNextArticle($editor) {
        $editor->setNextArticle('135523');
        $editor->publish();
        var_dump(new ReflectionClass($editor));
    }
 
}
?>
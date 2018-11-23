<?php
class Controller {
    public static function CreateView($ViewName){
        require_once ("./Views/$ViewName.php");
    }
}
?> 
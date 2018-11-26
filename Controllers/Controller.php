<?php
class Controller extends Database{
    public static function CreateView($ViewName){
        require_once ("./Views/$ViewName.php");
    }
}
?> 
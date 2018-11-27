<?php
namespace App\Controllers;

class Controller
{
    public static function createView($ViewName)
    {
        require_once("./Views/$ViewName.php");
    }
}

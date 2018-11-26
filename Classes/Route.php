<?php 
class Route{
    public static $validRoutes = array();
    public static function set($route, $function){
        //var_dump($_GET['url']);
        self::$validRoutes[] = $route;
        if ($_GET['url'] == $route);
        {   //var_dump($route);
            $function->__invoke();

        }
        
    }
}
?>
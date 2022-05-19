<?php
class Route
{
    public static $validRoutes = array();
    public static $pageIsChosen = false;

    public static function set($route, $function)
    {
        self::$validRoutes[] = $route;

        if (key($_GET) == $route && $route != "404") {
            self::$pageIsChosen = true;
            $function->__invoke();
        } else if ($route == "404" && !self::$pageIsChosen) {
            require_once("pages/errors/404.php");
        }
    }
}

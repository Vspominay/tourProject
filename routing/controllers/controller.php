<?php
class Controller
{
    public static function CreateView($path)
    {
        require_once("pages/$path/index.php");
    }
}

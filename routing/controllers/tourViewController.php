<?php

class TourViewController extends Controller
{
    public static function CreateView($path)
    {
        session_start();
        $_SESSION['id'] = $path;
        require("pages/tour-view/index.php");
    }
}

<?php


class Router
{
    private $pages = array();

    function addRoute($url, $path)
    {
        $this->pages[$url] = $path;
    }

    function route($url)
    {
        if (!array_key_exists($url, $this->pages)) {
            require "pages/errors/404.php";
            die();
        }

        $path = $this->pages[$url];
        $fileDir = "pages/" . $path;

        if (file_exists($fileDir)) {
            require $fileDir;
        } else {
            require "pages/errors/404.php";
            die();
        }
    }
}

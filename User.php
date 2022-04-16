<?php

interface IUser
{
    public function getFavouriteTours();
    public function getInfo();
}

class User implements IUser
{
    private $email;
    private $password;
    private $name;
    private $login;
    private $telNumber;
    private $favouriteTours;

    public function __construct(
        $email,
        $password,
        $name,
        $login,
        $telNumber,
        $favouriteTours
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->login = $login;
        $this->telNumber = $telNumber;
        $this->favouriteTours = $favouriteTours;
    }

    public function getFavouriteTours()
    {
        return $this->favouriteTours;
    }

    public function getInfo()
    {
        return array(
            $this->email,
            $this->password,
            $this->name,
            $this->login,
            $this->telNumber,
        );
    }

    function __get($property)
    {
        switch ($property) {
            case 'email':
                return $this->email;
            case 'password':
                return $this->password;
            case 'name':
                return $this->name;
            case 'login':
                return $this->login;
            case 'telNumber':
                return $this->telNumber;
        }
    }

    function __set($property, $value)
    {
        switch ($property) {
            case 'email':
                $this->email = $value;
                break;
            case 'password':
                $this->password = $value;
                break;
            case 'name':
                $this->name = $value;
                break;
            case 'login':
                $this->login = $value;
                break;
            case 'telNumber':
                $this->telNumber = $value;
                break;
        }
    }
}

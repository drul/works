<?php


class authBody
{
    public $authPass;
    public $log;
    public $pass;
    public $mysql;

    public function __construct($authPass)
    {

        $this->authPass->$authPass;
        $this->log = $authPass['login'];
        $this->pass = $authPass['password'];
        //$mysql = mysqli_connect($host, $database, $user,$password);



    }

    public function authProcess()
    {
        
    }
}
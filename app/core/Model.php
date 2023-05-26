<?php

namespace app\core;

abstract class Model {

    protected $connect;
 
    public function __construct()
    {
        $this->connect = new \PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USER, PASS);
    }

}
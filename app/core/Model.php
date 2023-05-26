<?php

namespace app\core;
use PDO;

abstract class Model {

    protected PDO $connect;
 
    public function __construct()
    {
        $this->connect = new \PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USER, PASS);
    }

}
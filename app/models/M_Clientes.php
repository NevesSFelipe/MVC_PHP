<?php

namespace app\models;
use app\core\Model;

class M_Clientes extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_list(): array
    {
        $sql = 'SELECT * FROM clientes';
        $query = $this->connect->query($sql);

        return $query->fetchAll();
    }

}
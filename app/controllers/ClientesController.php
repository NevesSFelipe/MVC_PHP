<?php

namespace app\controllers;

use app\core\Controller;
use app\models\M_Clientes;

class ClientesController extends Controller {
 
    public function index(): void
    {
        $model_clientes = new M_Clientes;
        $array_data['clientes'] = $model_clientes->get_list();
        $this->load_view('clientes/index', $array_data);
    }

}
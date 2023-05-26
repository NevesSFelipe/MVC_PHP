<?php

namespace app\controllers;
use app\core\Controller;

class IndexController extends Controller {
 
    public function index()
    {
        $array_data['nome'] = 'Felipe Neves';
        $this->load_view('home/index', $array_data);
    }

}
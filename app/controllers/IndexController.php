<?php

namespace app\controllers;
use app\core\Controller;

class IndexController extends Controller {
 
    public function index(): void
    {
        $this->load_view('home/index');
    }

}
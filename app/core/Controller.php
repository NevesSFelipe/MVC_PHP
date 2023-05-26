<?php

namespace app\core;

class Controller {
 
    protected function load_view(string $name_view, array $array_data = []): void
    {
        extract($array_data);
        include VIEW_DEFAULT_ADDRESSS . $name_view . '.php';
    }

}
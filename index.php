<?php

require 'config/config.php';
require 'config/connect.php';
require 'app/core/Core.php';
require 'vendor/autoload.php';

$core = new Core;
$core->run();
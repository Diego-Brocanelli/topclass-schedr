<?php

require_once __DIR__.'/../vendor/autoload.php';

use TopClass\Libraries\Core;

// load .env configuration
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// Init Core Library
(new Core)->run();

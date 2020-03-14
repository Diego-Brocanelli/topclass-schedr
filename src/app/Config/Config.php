<?php

namespace TopClass\Config;

use Dotenv\Dotenv;

/**
 * Responsible for reading the settings
 */
class Config
{
    /**
     * responsible for reading the settings from the .env file
     *
     * @return void
     */
    public function read()
    {
        // load .env configuration
        $dotenv = Dotenv::createImmutable(__DIR__.'/../../../');
        $dotenv->load();
    }
}

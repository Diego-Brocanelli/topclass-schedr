<?php

namespace TopClass\Libraries;

use TopClass\Config\Config;
use TopClass\Controllers;
use TopClass\Libraries\Url;

/**
 * App Core Class
 * Creates URL & Loads Core Controller
 * @example URL FORMAT - /controller/method/params
 */
class Core 
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    /**
     * Starts reading the project settings
     */
    public function __construct()
    {
        ( new Config )->read();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function run() 
    {
        $url = (new URL)->getUrl();

        if( empty($url) ){
            throw new \Exception("URL parameter not found! Please inform url parameter.");
        }

        $pageController = ucwords($url['page']);
        $pageController = strip_tags($pageController);
        $pageController = trim($pageController);
        
        $namespace = 'TopClass\Controllers\\'.$pageController;
        $controller     = new $namespace;

        // Look in controllers for first value
        if ( !is_object($controller) ) {
            throw new \Exception("Controller not found!");
        }

        // If exists, set as controller.
        $this->currentController = $controller;
        // Unset 0 index.
        unset($url['page']);

        // Check for second part of the url.
        if( 
            !array_key_exists('method', $url) || 
            empty($url['method'])       ||
            !method_exists($this->currentController, $url['method'])
        ){
            throw new \Exception('Method not found!');
        }

        $this->currentMethod = $url['method'];
        // Unset 1 index.
        unset($url['method']);

        // Get params.
        $this->params = $url;
        // Call a callback with array of params.
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
}

<?php

namespace TopClass\Controllers;

/**
 * Base Controller
 * Loads models and views.
 */
abstract class AbstractController 
{
    /**
     * Responsible to load view file
     *
     * @param  string $view
     * @param  array  $data
     * @return void
     */
    public function view($view, $data = []) 
    {
        $fileView = __DIR__."/../views/{$view}.php";

        if (!file_exists($fileView)) {
            throw new Exception('View does not exist.');
        }

        require_once $fileView;
    }

    /**
     * Responsible to load model file
     *
     * @param  string $model
     * @return void
     */
    public function model($model) 
    {
        $fileModel = __DIR__."/../models/{$view}.php";
        if (!file_exists($fileModel)) {
            throw new Exception('Model does not exist.');
        }
        // Require model file.
        require_once $fileModel;
        // Instantiate model.
        return new $model();
    } 
}

<?php namespace App\Controller;

use App\Controller\AppController;

/**
 * source: https://github.com/kenjis/php-framework-benchmark/blob/master/cake-3.0/src/Controller/HelloController.php
 */
class HelloWorldController extends AppController
{

    public $autoRender = false;

    public function index()
    {
        $this->response->body('Hello World!');
        return $this->response;
    }
}

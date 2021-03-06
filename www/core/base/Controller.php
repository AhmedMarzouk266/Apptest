<?php
/**
 * Created by PhpStorm.
 * User: amarz
 * Date: 09.11.2017
 * Time: 15:36
 */

namespace core\base;
use core\base\View;

abstract class Controller
{
    public $layout;
    public $partialView;
    public $objView;
    public $view; // set by class
    public $quest; // already set by class
    public $vars = [];
    public $route = [];

    public function __construct($route)
    {
        $this->layout = LAYOUT_DEFAULT;
        $this->route = $route;
        $this->view = $this->route['action'];
        $this->partialView = false;
    }

    public function setVars($vars)
    {
        $this->vars = $vars;

    }


    public function getView()
    {
        $this->objView = new View($this->route, $this->view, $this->layout,$this->partialView);
        $this->objView->render($this->vars);
    }

    public function redirect($location){
        header("location: ".$location);
    }


}
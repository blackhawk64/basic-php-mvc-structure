<?php

namespace App;

class View
{
    private $IndexInjectionJs;
    public $JsDependencies;

    public function __construct()
    {
        $this->JsDependencies = array();
    }

    public function Render($view)
    {
        require_once 'Views/Shared/_LayoutHead.php';
        require_once 'Views/' . $view . '.php';
        require_once 'Views/Shared/_LayoutFooter.php';
    }

    public function EmptyRender($view)
    {
        require_once 'Views/' . $view . '.php';
    }

    public function InitInjections()
    {
        $this->IndexInjectionJs = 0;
        unset($this->JsDependencies);
        $this->JsDependencies = array();
    }

    public function InjectJs($file)
    {
        # Concat script tag
        # Search wwwroot and BASE_URL by default
        $Injection = "<script src=" . constant('BASE_URL') . "wwwroot" . $file . "></script>";
        $this->JsDependencies[$this->IndexInjectionJs] = $Injection;
        $this->IndexInjectionJs += 1;
    }
}
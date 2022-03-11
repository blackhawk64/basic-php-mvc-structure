<?php

namespace App;

class View
{
    private $IndexInjectionJs;
    public $JsDependencies;
    private $IndexInjectionCss;
    public $CssDependencies;

    public function __construct()
    {
        $this->JsDependencies = array();
        $this->CssDependencies = array();
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
        $this->IndexInjectionCss = 0;
        unset($this->JsDependencies);
        unset($this->CssDependencies);
        $this->JsDependencies = array();
        $this->CssDependencies = array();
    }

    public function InjectJs($file)
    {
        # Concat script tag
        # Search wwwroot and BASE_URL by default
        $Injection = "<script src=" . constant('BASE_URL') . "wwwroot" . $file . "></script>";
        $this->JsDependencies[$this->IndexInjectionJs] = $Injection;
        $this->IndexInjectionJs += 1;
    }

    public function InjectCss($file)
    {
        # Concat script tag
        # Search wwwroot and BASE_URL by default
        $Injection = "<link href=" . constant('BASE_URL') . "wwwroot" . $file . " rel=\"stylesheet\" type=\"text/css\" />";
        $this->CssDependencies[$this->IndexInjectionCss] = $Injection;
        $this->IndexInjectionCss += 1;
    }
}

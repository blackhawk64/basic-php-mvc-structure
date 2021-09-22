<?php
namespace App;

class View
{
    public function __construct() { }

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
}
?>
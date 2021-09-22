<?php
use Controllers\ErrorController;

class AppStartup
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(count($url) <= 2)
        {
            if(empty($url[0]))
            {
                $controller = new Controllers\HomeController;
                $controller->Index();
                return false;
            }

            $archivoController = 'Controllers/' . $url[0] . 'Controller.php';
            $class = $url[0] . 'Controller';

            if(file_exists($archivoController))
            {
                $dynClass = "Controllers\\".$class;
                $controller = new $dynClass;

                if(isset($url[1]))
                {
                    if(method_exists($controller,$url[1]))
                    {
                        $controller->{$url[1]}();
                    }
                    else
                    {
                        $controller = new Controllers\ErrorController;
                        $controller->Index();
                    }
                }
                else
                {
                    $controller->Index();
                }
            }
            else
            {
                $controller = new Controllers\ErrorController;
                $controller->Index();
            }
        }
        else
        {
            header('Location: '. constant('BASE_URL') .'Error/');
        }
    }
}
?>
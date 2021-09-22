<?php
namespace Controllers;
use App\Controller;

class ErrorController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->View->EmptyRender('Error/Index');
    }
}
?>
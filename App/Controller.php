<?php
namespace App;
use App\View;

class Controller
{
    public function __construct(){
        $this->View = new View();
    }
}
?>
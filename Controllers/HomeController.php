<?php 
namespace Controllers;
use App\Controller;
use DataModel\DataModel;

class HomeController extends Controller{
    private $DataModel;
    
    public function __construct(){
        parent::__construct();
        # This is one way to pass variables through classes to its views
        $this->View->ImageSource = "https://www.w3schools.com/bootstrap/";
    }

    public function Index(){
        $this->View->Render('Home/Index');
    }
}
?>
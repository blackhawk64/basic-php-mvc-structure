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
        # This is an example of JS or CSS injection into specific page
        $this->View->InitInjections();
        $this->View->InjectJs("/js/mypersonaljs.js");
        $this->View->InjectCss("/css/mypersonalstyle.css");
        # This render the associated view
        $this->View->Render('Home/Index');
    }
}
?>
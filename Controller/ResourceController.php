<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/User.php';


class ResourceController extends Controller {
    public function index() {
      if(isset($_GET["action"]) && !empty($_GET["action"])){
        
        if($_GET["action"] === "insert-resource"){
            $userData = User::find($_SESSION["user_id"]);
            return $this->render('resource', ["userData"=>$userData, "title"=>["title"=>"Add Resource"]]);
        }
      }
    }
    
    public function add() {
      
    }
    
    
}

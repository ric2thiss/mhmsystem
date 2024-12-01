<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Model/ResourceModel.php';


class ResourceController extends Controller {
    public function index() {
      if(!isset($_SESSION["user_id"])){
        header("Location: ./login");
    }
      if(isset($_GET["action"]) && !empty($_GET["action"])){
        
        if($_GET["action"] === "insert-resource"){
            $userData = User::find($_SESSION["user_id"]);
            return $this->render('resource', ["userData"=>$userData, "title"=>["title"=>"Add Resource"]]);
        }
      }
    }
    
    public function insert() {

      $name = trim($_POST["name"]);
      $contact_number = trim($_POST["contact_number"]);
      $resource_name = trim($_POST["resource_name"]);
      $type = trim($_POST["type"]);
      $address = trim($_POST["address"]);
  
      if ($_SESSION["role_name"] !== "Admin") {
          $_SESSION["resource_insertion"] = "Only the admins can add resource";
      }
  
      if (!$name || !$contact_number || !$resource_name || !$type || !$address) {
          $_SESSION["resource_insertion"] = "Please fill all the fields";
          $_SESSION["statusColor"] = "bg-danger";
          header("Location: " . $_SERVER['HTTP_REFERER']);
          exit();
      }
  
      if (ResourceModel::insert($name, $type, $address, $resource_name, $contact_number)) {
          $_SESSION["resource_insertion"] = "Resource added successfully";
          $_SESSION["statusColor"] = "bg-success";
          header("Location: " . $_SERVER['HTTP_REFERER']);
          exit();
      } else {
          $_SESSION["resource_insertion"] = "Failed to add resource";
          $_SESSION["statusColor"] = "bg-danger";
          header("Location: " . $_SERVER['HTTP_REFERER']);
          exit();
      }
  }
    
    
}

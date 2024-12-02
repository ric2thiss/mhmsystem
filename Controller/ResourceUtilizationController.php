<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Model/ResourceModel.php';
require_once __DIR__ . '/../Model/CaseModel.php';


class ResourceUtilizationController extends Controller {
    public function index() {
        if(!isset($_SESSION["user_id"])){
            header("Location: ./login");
        }
        $case_data = CaseModel::get_all();
        $resource_data = ResourceModel::get_all();
        $userData = User::find($_SESSION["user_id"]);
        return $this->render('resource-utilization',["userData"=>$userData, "case_datas" => $case_data,"resource_datas" => $resource_data,  "title"=>["title"=>"Utilize Resource"]]);
      
    }
    
    public function insert() {
        $case_id = trim($_POST["case_id"]);
        $resource_id = trim($_POST["resource_id"]);
        $additional_description = trim($_POST["additional_description"]);
        $date_used = trim($_POST["date_used"]);

        if (!$case_id || !$resource_id || !$additional_description || !$date_used) {
            $_SESSION["resource_utilization"] = "Please fill all the fields";
            $_SESSION["statusColor"] = "bg-danger";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }

        if(ResourceModel::insertUtilization($case_id, $resource_id, $additional_description, $date_used)){
            $_SESSION["resource_utilization"] = "Resource Utilization Added Successfully";
            $_SESSION["statusColor"] = "bg-success";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }else{
            $_SESSION["resource_utilization"] = "Failed to Add Resource Utilization";
            $_SESSION["statusColor"] = "bg-danger";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
        
    }
    
    
}

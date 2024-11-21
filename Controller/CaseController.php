<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Model/BarangayModel.php';
require_once __DIR__ . '/../Model/CaseCategoryModel.php';
require_once __DIR__ . '/../Model/CaseModel.php';

class CaseController extends Controller {
    public function index() {
        if(empty($_GET["addcase"]) || !isset($_GET["addcase"])){
            return http_response_code(404);
        };
        $title = ["title" => "Add New Case -" . $_GET["addcase"]];
        $barangay = BarangayModel::all();
        $case_category = CaseCategoryModel::all();
        $case_severity = CaseCategoryModel::show_serverity_category();
        $userData = User::find($_SESSION["user_id"]);
        return $this->render("add-new-case",["userData" => $userData, "title" => $title, "barangays"=>$barangay, "categories" =>$case_category, "case_severities"=>$case_severity]);
    }
    public function register() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Validate each required field individually
            if (empty($_POST["first_name"]) || empty($_POST["last_name"]) || empty($_POST["address"]) ||
                empty($_POST["barangay"]) || empty($_POST["purok"]) || empty($_POST["case_category"]) ||
                empty($_POST["case_severity"]) || empty($_POST["sex"]) || empty($_POST["age"])) {
    
            
                echo "All fields are required. Please fill in all the fields.";
                return; // Exit early if validation fails
            }
    
            $process = CaseModel::insert();

            if ($process) {
                $_SESSION["case_insertion"] = "You successfully inserted a case";
                $_SESSION["statusColor"] = "bg-success";
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit;
            } else {
                $_SESSION["statusColor"] = "bg-danger";
                $_SESSION["case_insertion"] = "Error registering case. Please try again later.";
            }
        }
    }
    
    
}

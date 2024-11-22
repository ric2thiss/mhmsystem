<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Model/BarangayModel.php';
require_once __DIR__ . '/../Model/CaseCategoryModel.php';
require_once __DIR__ . '/../Model/CaseModel.php';
require_once __DIR__ . '/../Model/ApiModel.php';

class CaseController extends Controller {
    public function index() {
        if (empty($_GET["addcase"]) || !isset($_GET["addcase"])) {
            if (isset($_GET["action"]) && $_GET["action"] === "select-barangay") {
                $userData = User::find($_SESSION["user_id"]);
                $tbDatas = ApiModel::case_data_table_all();
                return $this->render("select-barangay", ["userData" => $userData, "tbDatas" => $tbDatas]);
            } else if (isset($_GET["action"]) && $_GET["action"] === "view-cases") {
                $userData = User::find($_SESSION["user_id"]);
                $caseDatas = CaseModel::get();
                return $this->render("view-cases", ["userData" => $userData, "caseDatas" => $caseDatas, "title" => ["title" => "View Cases"]]);
            }
        }
    
        $title = ["title" => "Add New Case -" . ($_GET["addcase"] ?? '')];
        $barangay = BarangayModel::all();
        $case_category = CaseCategoryModel::all();
        $case_severity = CaseCategoryModel::show_severity_category(); // Corrected typo in function name
        $userData = User::find($_SESSION["user_id"]);
        return $this->render("add-new-case", ["userData" => $userData, "title" => $title, "barangays" => $barangay, "categories" => $case_category, "case_severities" => $case_severity]);
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

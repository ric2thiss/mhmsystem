<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/Cases.php';

class ApisController extends Controller {
/*
1. Show the City level Trend of Cases (Per month) in Line graph 
naa mn jud nay numbers in terms of cases (show the numbers of cases 
in every month of the whole year

*/
public function show($request) {
    header('Content-Type: application/json');
    // Check if the request is "cases"
    // http://localhost/mental-health-management-system/api/cases?get=all
    if ($request === "cases" && isset($_GET["get"])) {
        if ($_GET["get"] === "all") {
            // Check if "by" parameter is present and equals "month"
            // Example path
            // http://localhost/mental-health-management-system/api/cases?get=all&by=month
            if (isset($_GET["by"]) && $_GET["by"] === "month") {
                $data = Cases::get_month_cases_number();
                echo json_encode(["data" => $data]);
            
            // This is for MONTH
            // Get the cases of specific month which resulted : barangays like what are the barangay that has cases in that month
            // If i click january then it must show the list of barangays that are in january (CASES)
            // Example call : http://localhost/mental-health-management-system/api/cases?get=all&scope=barangay&month_name=November
            } else if(isset($_GET["scope"]) && isset($_GET["month_name"]) && $_GET["scope"] === "barangay"){
                $data = Cases::get_scope_cases_to_specific_month($_GET["month_name"]);
                if($data){
                    echo json_encode(["data" => $data]);
                }else{
                    echo json_encode(["data" => [array("month_name" => $_GET["month_name"], "barangay_name" => "N/A", "case_count" => 0)]]);
                }
            }else {
                // Handle generic "all cases" request
                $data = Cases::all();
                echo json_encode(["data" => $data]);
            }
        } else {
            echo json_encode(["error" => "Invalid 'get' value"]);
            http_response_code(400); // Bad request
        }
    } else {
        echo json_encode(["error" => "Invalid request"]);
        http_response_code(400); // Bad request
    }
}

}






// / Middleware logic here
            // if (!$this->middlewareCheck()) { 
            //     echo json_encode(["error" => "Unauthorized access"]);
            //     http_response_code(403); // Forbidden
            //     return;
            // }

 // Example middleware function
    // private function middlewareCheck() {
    //     return isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
    // }
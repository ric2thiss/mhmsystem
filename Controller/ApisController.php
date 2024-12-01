<?php

// Include required files for the Controller, Cases model, and ApiModel
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/Cases.php';
require_once __DIR__ . '/../Model/ApiModel.php';
require_once __DIR__ . '/../Model/BarangayModel.php';

/**
 * ApisController
 * Handles API requests related to cases and barangay data.
 */
class ApisController extends Controller {

    /**
     * Handles API requests based on the given parameters.
     * 
     * @param string $request The request type (e.g., "cases" or "barangay").
     * 
     * Example Endpoints:
     * - http://localhost/mental-health-management-system/api/cases?get=all&by=month
     * - http://localhost/mental-health-management-system/api/cases?get=all&scope=barangay&month_name=November
     * - http://localhost/mental-health-management-system/api/cases?get=all&scope=barangay&lists=numberofcases
     * - http://localhost/mental-health-management-system/api/barangay?get=all
     * - http://localhost/mental-health-management-system/api/barangay?get=barangay_name&barangay=ampayon
     */
    public function show($request) {
        header('Content-Type: application/json');

        // Handle "cases" requests
        if ($request === "cases") {
            $this->handleCasesRequest();
            return;
        }

        // Handle "barangay" requests
        if ($request === "barangay") {
            $this->handleBarangayRequest();
            return;
        }

        if($request === "category"){
            $this->handleCategoryRequest();
        }

        if($request === "demographic"){
            $this->handleRequestDemographics();
        }

        if($request === "age"){
            $this->handleRequestAge();
        }
        if($request === "purok"){
            $this->handleRequestPurok();
        }

        // Handle invalid requests
        $this->sendError("Invalid request", 400);
    }

    /**
     * Handles requests for "cases".
     */
    private function handleCasesRequest() {
        if (!isset($_GET["get"])) {
            $this->sendError("Missing 'get' parameter", 400);
            return;
        }

        if ($_GET["get"] === "all") {
            // Case: Group cases by month for the entire year
            if (isset($_GET["by"]) && $_GET["by"] === "month") {
                $data = Cases::get_month_cases_number();
                $this->sendResponse($data);
                return;
            }

            // Case: Show barangay cases for a specific month
            if (isset($_GET["scope"], $_GET["month_name"]) && $_GET["scope"] === "barangay") {
                $data = Cases::get_scope_cases_to_specific_month($_GET["month_name"]);
                $this->sendResponse($data ?: [
                    ["month_name" => $_GET["month_name"], "barangay_name" => "N/A", "case_count" => 0]
                ]);
                return;
            }

            // Case: List all barangays and their number of cases
            if (isset($_GET["scope"], $_GET["lists"]) && $_GET["scope"] === "barangay" && $_GET["lists"] === "numberofcases") {
                $data = ApiModel::case_data_table_all();
                $this->sendResponse($data);
                return;
            }

            // 
            if(isset($_GET["general-categories"]) && $_GET["general-categories"] === "city"){
                echo "TEST";
                return;
            }

            // Default case: Return all cases without additional filters
            $data = Cases::all();
            $this->sendResponse($data);
            return;
        }

        // Handle invalid "get" value
        $this->sendError("Invalid 'get' value for cases", 400);
    }

    /**
     * Handles requests for "barangay".
     */
    private function handleBarangayRequest() {
        if (isset($_GET["get"]) && $_GET["get"] === "all") {
            // Case: Return all barangays
            $data = BarangayModel::all();
            $this->sendResponse($data);
            return;
        }
    
        if (isset($_GET["barangay_id"]) && !isset($_GET["get"])) {
            // Case: Return all purok of the specific barangay
            $barangay_id = $_GET["barangay_id"];
            $data = Cases::get_cases_based_on_barangay_id($barangay_id);
            $this->sendResponse($data);
            return;
        }
    
        if (isset($_GET["get"]) && $_GET["get"] === "barangay_name" && isset($_GET["barangay"])) {
            // Case: Return specific barangay name based on barangay_id
            // Example : http://localhost/mental-health-management-system/api/barangay?get=barangay_name&barangay=ampayon
            $barangay = $_GET["barangay"];
            $data = BarangayModel::find($barangay);
    
            if ($data) {
                $this->sendResponse(["data" => $data]);
            } else {
                $this->sendError("Barangay not found", 404);
            }
            return;
        }
    
        // Handle invalid "get" value for barangay
        $this->sendError("Invalid 'get' value for barangay", 400);
    }

    /**
     * Handle request for purok
     */

    private function handleRequestPurok(){
        if (isset($_GET["get"]) && $_GET["get"] === "purok"){
            // Case: Return all puroks
            $data = ApiModel::get_case_barangay_data($_GET["id"]);
            $this->sendResponse($data);
            return;
        }

        if(isset($_GET["get-purok"]) && $_GET["get-purok"] === "purok"){
            $data = BarangayModel::show($_GET["id"]);
            $this->sendResponse($data);
        }

    }

    /**
     * Handles request for category
     * 
     */

    private function handleCategoryRequest(){
        if(!isset($_GET["get"])){
            $this->sendError("Invalid 'get' value for category", 400);
        }

        if($_GET["get"] === "all"){
            $data = ApiModel::case_category_pie_chart();
            $this->sendResponse($data);
        }

        /**
         * http://localhost/mental-health-management-system/api/category?get=filter&barangay_id=${id}
         */
        if($_GET["get"] === "filter" && isset($_GET["barangay_id"])){
            $data = ApiModel::barangay_case_category_pie_chart($_GET["barangay_id"]);
            $this->sendResponse($data);
        }

        if($_GET["get"] === "allcategory"){
            $data = Cases::get_all_categories_for_one_chart();
            $this->sendResponse($data);
        }
    }

    private function handleRequestDemographics(){
        if(!isset($_GET["get"])){
            $this->sendError("Invalid 'get' value for demographics", 400);
        }
        
        if($_GET["get"] === "all"){
            $data = ApiModel::get_demographic();
            $this->sendResponse($data);
        }

        if($_GET["get"] === "filter" && isset($_GET["month"])){
            $data = ApiModel::get_demographic_filter_month($_GET["month"]);
            $this->sendResponse($data);
        }

    }

    private function handleRequestAge(){
        if(!isset($_GET["get"])){
            $this->sendError("Invalid 'get' value for overall ages", 400);
        }
        if($_GET["get"] === "all"){
            $data = ApiModel::get_overall_age();
            $this->sendResponse($data);
        }

    }
    
    
    /**
     * Sends a JSON response.
     * 
     * @param mixed $data The response data.
     * @param int $statusCode The HTTP status code (default: 200).
     */
    private function sendResponse($data, $statusCode = 200) {
        http_response_code($statusCode);
        echo json_encode(["data" => $data]);
        exit;
    }

    /**
     * Sends a JSON error response.
     * 
     * @param string $message The error message.
     * @param int $statusCode The HTTP status code (default: 400).
     */
    private function sendError($message, $statusCode = 400) {
        http_response_code($statusCode);
        echo json_encode(["error" => $message]);
        exit;
    }
}

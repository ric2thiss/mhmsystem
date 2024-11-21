<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/ApiModel.php';
require_once __DIR__ . '/../Model/BarangayModel.php';

class ApiController extends Controller {
    public function index() {
        $data = ApiModel::all();
        return $this->render('case', ["data"=>$data]);
    }
    public function show($request){
        
        if($request === "datatable" && isset($_SESSION["user_id"]) && $_SERVER["REQUEST_METHOD"] === "GET"){
            $data = ApiModel::case_data_table_all();
            header('Content-Type: application/json');
            echo json_encode($data);
        }else if($request && isset($_SESSION["user_id"])){
            // /category?
            if($request === "category" ){
                $data = ApiModel::case_category_pie_chart();
                header('Content-Type: application/json');
                echo json_encode($data);
            } else if ($request === "barangay" && isset($_GET["id"]) && $_GET["id"] != null) {
                // barangay?id={req}
                $data = ApiModel::get_case_barangay_data($_GET["id"]);
                header('Content-Type: application/json');
                // Check if $data is not empty
                if (empty($data) || !isset($data[0]["case_id"]) || $data[0]["case_id"] === null) {
                    echo json_encode(["message" => "No case available for this $request", "status" => "failed"]);
                } else {
                    echo json_encode($data);
                }
            } else if ($request === "purok" && isset($_GET["id"])) {
                // get the purok per barangay using barangay id 
                // purok?id={barangay_id}
                $data = BarangayModel::show($_GET["id"]);
                header('Content-Type: application/json');

                if(empty($data)){
                    echo json_encode(["message" => "No $request available for this barangay", "status"=>"failed"]);
                }

                echo json_encode(["status"=>"Success", "data"=>$data]);
            }else{
                http_response_code(400);
                echo json_encode(["message" => "Invalid request", "status" => "error"]);
            }
            
        }
    }
}

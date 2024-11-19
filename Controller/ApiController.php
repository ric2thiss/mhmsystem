<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/ApiModel.php';

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
        }
    }
}

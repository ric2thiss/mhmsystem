<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Model/ApiModel.php';
require_once __DIR__ . '/../Model/Cases.php';
require_once __DIR__ . '/../Model/ResourceModel.php';

class DashboardController extends Controller {
    public function index() {
        if(!isset($_SESSION["user_id"])){
            header("Location: ./login");
        }
        $title = ["title" => "Dashboard Page"];
        $userData = User::find($_SESSION["user_id"]);
        $data = ApiModel::case_data_table_all();
        $case_count = Cases::get_counts();
        $resource_count = ResourceModel::get_counts();
        return $this->render('dashboard', ["userData" => $userData, "title" => $title, "tbDatas" => $data, "case_count" => $case_count, "resource_count"=> $resource_count, "resource_utilization_count" => ResourceModel::get_utilized_resource_count()]);
    }
}

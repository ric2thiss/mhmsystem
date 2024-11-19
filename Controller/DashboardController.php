<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Model/ApiModel.php';

class DashboardController extends Controller {
    public function index() {
        $title = ["title" => "Dashboard Page"];
        $userData = User::find($_SESSION["user_id"]);
        $data = ApiModel::case_data_table_all();
        return $this->render('dashboard', ["userData" => $userData, "title" => $title, "tbDatas" => $data]);
    }
}

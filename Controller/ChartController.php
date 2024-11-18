<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/User.php';

class ChartController extends Controller {
    public function index() {
        $title = ["title" => "Chart Page"];
        $userData = User::find($_SESSION["user_id"]);
        return $this->render('chart', ["userData" => $userData, "title" => $title]);
    }
}

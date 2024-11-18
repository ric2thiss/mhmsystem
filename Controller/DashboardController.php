<?php

require_once __DIR__ . '/../core/Controller.php';

class DashboardController extends Controller {
    public function index() {
        $title = ["title" => "Dashboard Page"];
        return $this->render('dashboard', ["title" => $title]);
    }
}

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../Model/User.php';

class LoginController extends Controller {
    public function index() {
        $title = ["title" => "Login Page"];
        return $this->render('login', ["title" => $title]);
    }

    public function login() {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
    
        if (!$email || !$password) {
            // echo "<script>alert('Email and password are required!');</script>";
            $msg = ["status" => "failed", "message" => "Email and password are required!"];
            return $this->render('login', ["res" => $msg]);
        }
    
        $user = User::findUserByEmail($email);
    
        if (!$user) {
            // echo "<script>alert('User not found!');</script>";
            $msg = ["status" => "failed", "message" => "User not found!"];
            return $this->render('login', ["res" => $msg]);
        }
    
        if ($password !== $user['password']) {
            // echo "Incorrect password!";
            $msg = ["status" => "failed", "message" => "Incorrect password!"];
            return $this->render('login', ["res" => $msg]);
        }

        $_SESSION["user_id"];
    
        // Successful login
        header('Location: ./');
    }
    
    
}

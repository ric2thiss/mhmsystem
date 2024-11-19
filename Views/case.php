<?php

if($_SERVER["REQUEST_METHOD"] === "GET"){
    if(isset($_SESSION["user_id"])){
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }else{
        return array("error" => "Unauthorized");
    }
}
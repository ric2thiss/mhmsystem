<?php

require_once __DIR__ . '/../core/Model.php';

class CaseModel extends Model {

    public static function insert() {
        try {
            // Insert into `client` table
            $stmt = self::conn()->prepare("INSERT INTO client(client_fname, client_lname, client_address, gender, age) 
                                           VALUES (:client_fname, :client_lname, :client_address, :gender, :age)");
            $stmt->bindParam(":client_fname", $_POST["first_name"]);
            $stmt->bindParam(":client_lname", $_POST["last_name"]);
            $stmt->bindParam(":client_address", $_POST["address"]);
            $stmt->bindParam(":gender", $_POST["sex"]);
            $stmt->bindParam(":age", $_POST["age"]);
            $stmt->execute();
    
            // Retrieve the last inserted ID
            $stmt = self::conn()->prepare("SELECT LAST_INSERT_ID() AS last_id");
            $stmt->execute();
            $last_id = $stmt->fetch(PDO::FETCH_ASSOC)["last_id"];

            $_SESSION["lastID"] = $last_id;
    
            // Insert into `mental_health_case` table
            $stmt2 = self::conn()->prepare("INSERT INTO mental_health_case(case_title, case_description, client_id, barangay_id, purok_id, user_id, category_id, case_severity_id)
                                            VALUES (:case_title, :case_description, :client_id, :barangay_id, :purok_id, :user_id, :category_id, :case_severity_id)");
            $stmt2->bindParam(":case_title", $_POST["case_title"]);
            $stmt2->bindParam(":case_description", $_POST["case_description"]);
            $stmt2->bindParam(":client_id", $last_id);
            $stmt2->bindParam(":barangay_id", $_POST["barangay"]);
            $stmt2->bindParam(":purok_id", $_POST["purok"]);
            $stmt2->bindParam(":user_id", $_SESSION["user_id"]);
            $stmt2->bindParam(":category_id", $_POST["case_category"]);
            $stmt2->bindParam(":case_severity_id", $_POST["case_severity"]);

            $result = $stmt2->execute();
    
            if (!$result) {
                error_log("Error in second insert: " . json_encode($stmt2->errorInfo()));
            }
    
            return $result;
    
        } catch (PDOException $e) {
            // Log the error and return `false`
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }
    
    
    
}
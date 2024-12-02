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
            $stmt = self::conn()->prepare("SELECT MAX(client_id) AS max_id FROM client");
            $stmt->execute();
            $last_id = $stmt->fetch(PDO::FETCH_ASSOC)["max_id"];


            $_SESSION["lastID"] = $last_id;
    
            // Insert into `mental_health_case` table
            $stmt2 = self::conn()->prepare("INSERT INTO mental_health_case(case_title, case_description, client_id, barangay_id, purok_id, user_id, case_category_id, case_severity_id)
                                            VALUES (:case_title, :case_description, :client_id, :barangay_id, :purok_id, :user_id, :case_category_id, :case_severity_id)");

            $stmt2->bindParam(":case_title", $_POST["case_title"]);
            $stmt2->bindParam(":case_description", $_POST["case_description"]);
            $stmt2->bindParam(":client_id", $last_id);
            $stmt2->bindParam(":barangay_id", $_POST["barangay"]);
            $stmt2->bindParam(":purok_id", $_POST["purok"]);
            $stmt2->bindParam(":user_id", $_SESSION["user_id"]);
            $stmt2->bindParam(":case_category_id", $_POST["case_category"]);
            $stmt2->bindParam(":case_severity_id", $_POST["case_severity"]);

            $result = $stmt2->execute();

            return $result;

    
        } catch (PDOException $e) {
            // Log the error and return `false`
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }
    public static function get() {
        try {
            $stmt = self::conn()->prepare("SELECT 
                                                m.case_id,
                                                m.case_title, 
                                                m.case_description, 
                                                m.status,
                                                c.client_fname, 
                                                c.client_lname, 
                                                c.client_address, 
                                                c.gender, 
                                                c.age,
                                                b.barangay_name, 
                                                p.purok_name, 
                                                u.first_name, 
                                                u.last_name, 
                                                r.role_name,
                                                cc.case_category_name, 
                                                cc.case_category_description, 
                                                cs.name AS case_severity
                                           FROM mental_health_case m
                                           LEFT JOIN client c ON m.client_id = c.client_id
                                           LEFT JOIN barangay b ON m.barangay_id = b.barangay_id
                                           LEFT JOIN purok p ON m.purok_id = p.purok_id
                                           LEFT JOIN user u ON m.user_id = u.user_id
                                           LEFT JOIN role r ON u.role_id = r.role_id
                                           LEFT JOIN case_category cc ON m.case_category_id = cc.case_category_id
                                           LEFT JOIN case_severity cs ON m.case_severity_id = cs.case_severity_id
                                           ORDER BY m.case_id DESC
                                           ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error: " . $e->getMessage());
            return [];
        }
    }

    public static function get_all(){
        try{
            $stmt = self::conn()->prepare("SELECT case_id, case_title FROM mental_health_case");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error: " . $e->getMessage());
            return [];
        }
    }
    
    
    
    
    
}
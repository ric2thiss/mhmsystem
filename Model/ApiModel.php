<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once __DIR__ . '/../core/Model.php';


class ApiModel extends Model {

// API for GET
    public static function all() {
        try {
            $stmt = self::conn()->query("SELECT 
                                            MONTHNAME(created_at) AS month, 
                                            COUNT(*) AS case_count
                                        FROM 
                                            mental_health_case
                                        GROUP BY 
                                            YEAR(created_at), 
                                            MONTH(created_at)
                                        ORDER BY 
                                            MONTH(created_at)");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error fetching all users: " . $e->getMessage());
            return [];
        }
    }
// API for GET
    public static function case_data_table_all() {
        try {
            $stmt = self::conn()->query("SELECT 
                                            b.barangay_name, b.barangay_id,
                                            COUNT(m.case_id) AS case_count
                                        FROM barangay b
                                        LEFT JOIN mental_health_case m ON m.barangay_id = b.barangay_id
                                        GROUP BY b.barangay_id, b.barangay_name
                                        HAVING case_count > 0;

                                         ");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error fetching data: " . $e->getMessage());
            return [];
        }
    }

    public static function case_category_pie_chart(){
        try{
                $stmt = self::conn()->query("SELECT 
                                            c.case_category_name,
                                            COUNT(m.case_id) AS case_count
                                            FROM mental_health_case m
                                            LEFT JOIN case_category c ON m.case_category_id = c.case_category_id
                                            GROUP BY c.case_category_id, c.case_category_name
                ");
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch (PDOException $e) {
                error_log("Error fetching data: " . $e->getMessage());
            return [];
                
        }
    }

    // Get the specific barangay data
    public static function get_case_barangay_data($id) {
        try {
            $stmt = self::conn()->prepare("SELECT 
                    b.barangay_id AS barangay_id,
                    b.barangay_name AS barangay_name,
                    m.case_id AS case_id,
                    COUNT(m.case_id) AS case_count,
                    m.case_description AS case_details,
                    p.purok_id AS purok_id,
                    p.purok_name AS purok_name
                FROM 
                    barangay b
                LEFT JOIN mental_health_case m ON m.barangay_id = b.barangay_id
                LEFT JOIN purok p ON m.purok_id = p.purok_id
                WHERE 
                    b.barangay_id = :barangay_id

                GROUP BY b.barangay_id, b.barangay_name, p.purok_id, p.purok_name
            ");
            $stmt->bindParam(":barangay_id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error fetching data: " . $e->getMessage());
            return []; 
        }
    }
    
    
    
}
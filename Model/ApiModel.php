<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once __DIR__ . '/../core/Model.php';


class ApiModel extends Model {
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

    public static function case_data_table_all() {
        try {
            $stmt = self::conn()->query("SELECT 
                                            b.barangay_name,
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
    
}
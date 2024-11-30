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
    
    public static function get_specific_demographic($barangay_id){
        try {
            // Prepare the query
            $stmt = self::conn()->prepare("SELECT
                                            c.gender,
                                            COUNT(*) AS gender_count,
                                            MIN(c.age) AS min_age,
                                            (SELECT COUNT(*) 
                                            FROM client c2 
                                            WHERE c2.age = MIN(c.age) AND c2.gender = c.gender
                                            ) AS min_age_count
                                        FROM
                                            client c
                                        INNER JOIN
                                            mental_health_case m 
                                        ON
                                            m.client_id = c.client_id
                                        INNER JOIN 
                                            barangay b
                                        ON
                                            b.barangay_id = m.barangay_id
                                        WHERE m.barangay_id = :barangay_id
                                        GROUP BY
                                            c.gender;

                                    ");
        // Bind the parameters
        $stmt->bindParam(':barangay_id', $barangay_id);
        $stmt->execute();

            
            // Check if query execution is successful
            if (!$stmt) {
                throw new Exception("Query failed to execute.");
            }
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (PDOException $e) {
            // Log the detailed error
            error_log("SQL Error: " . $e->getMessage());
            return false;
        } catch (Exception $e) {
            // Log any other exceptions
            error_log("General Error: " . $e->getMessage());
            return false;
        }
    }


    public static function get_demographic_filter_month($month){
        try {
            // Prepare the query
            $stmt = self::conn()->prepare("SELECT
                c.gender,
                COUNT(*) AS gender_count,
                MIN(c.age) AS min_age,
                (SELECT COUNT(*) 
                FROM client c2 
                WHERE c2.age = MIN(c.age) AND c2.gender = c.gender
                ) AS min_age_count
            FROM
                client c
            INNER JOIN
                mental_health_case m 
            ON
                m.client_id = c.client_id
            WHERE
                MONTHNAME(m.created_at) = :month_name 
            GROUP BY
                c.gender;

            ");
        // Bind the parameters
        $stmt->bindParam(':month_name', $month);
        $stmt->execute();

            
            // Check if query execution is successful
            if (!$stmt) {
                throw new Exception("Query failed to execute.");
            }
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (PDOException $e) {
            // Log the detailed error
            error_log("SQL Error: " . $e->getMessage());
            return false;
        } catch (Exception $e) {
            // Log any other exceptions
            error_log("General Error: " . $e->getMessage());
            return false;
        }
    }

    public static function get_demographic(){
        try {
            // Prepare the query
            $stmt = self::conn()->query("SELECT
                                            c.gender,
                                            COUNT(*) AS gender_count,
                                            MIN(c.age) AS min_age,
                                            (SELECT COUNT(*) 
                                            FROM client c2 
                                            WHERE c2.age = MIN(c.age) AND c2.gender = c.gender
                                            ) AS min_age_count
                                        FROM
                                            client c
                                        INNER JOIN
                                            mental_health_case m 
                                        ON
                                            m.client_id = c.client_id
                                        GROUP BY
                                            c.gender;

                                    ");
            
            // Check if query execution is successful
            if (!$stmt) {
                throw new Exception("Query failed to execute.");
            }
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (PDOException $e) {
            // Log the detailed error
            error_log("SQL Error: " . $e->getMessage());
            return false;
        } catch (Exception $e) {
            // Log any other exceptions
            error_log("General Error: " . $e->getMessage());
            return false;
        }
    }


    // public static function barangay_case_category_pie_chart($barangay_id) {
    //     try {
    //         // FOR REFENCE AND BACKUP
    //         // Prepare the SQL statement with a placeholder for barangay_id
    //         // $stmt = self::conn()->prepare("SELECT 
    //         //                                     c.case_category_name,
    //         //                                     COUNT(m.case_id) AS case_count,
    //         //                                     b.barangay_name
    //         //                                 FROM 
    //         //                                     mental_health_case m
    //         //                                 LEFT JOIN 
    //         //                                     case_category c ON m.case_category_id = c.case_category_id
    //         //                                 LEFT JOIN 
    //         //                                     barangay b ON m.barangay_id = b.barangay_id
    //         //                                 WHERE 
    //         //                                     m.barangay_id = :barangay_id
    //         //                                 GROUP BY 
    //         //                                     c.case_category_id, c.case_category_name, b.barangay_name
    //         //                             ");

    //         $stmt = self::conn()->prepare("SELECT 
    //                                             c.case_category_name,
    //                                             COALESCE(COUNT(m.case_id), 0) AS case_count,
    //                                             b.barangay_name
    //                                         FROM 
    //                                             case_category c
    //                                         LEFT JOIN 
    //                                             mental_health_case m 
    //                                             ON c.case_category_id = m.case_category_id 
    //                                             AND m.barangay_id = :barangay_id
    //                                         LEFT JOIN 
    //                                             barangay b 
    //                                             ON b.barangay_id = :barangay_id
    //                                         GROUP BY 
    //                                             c.case_category_id, c.case_category_name, b.barangay_name
    //                                         ORDER BY 
    //                                             c.case_category_name;

    //                                         ");
    //         // Bind the parameter for barangay_id
    //         $stmt->bindParam(':barangay_id', $barangay_id, PDO::PARAM_INT);
            
    //         // Execute the query
    //         $stmt->execute();
            
    //         // Fetch the results as an associative array
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
    //     } catch (PDOException $e) {
    //         // Log the error message for debugging
    //         error_log("Error fetching data: " . $e->getMessage());
    //         // Return an empty array in case of error
    //         return [];
    //     }
    // }
    
    
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
    public static function barangay_case_category_pie_chart($barangay_id) {
        try {
            // Prepare the SQL statement with a placeholder for barangay_id
            $stmt = self::conn()->prepare("SELECT 
                                                c.case_category_name,
                                                COALESCE(COUNT(m.case_id), 0) AS case_count,
                                                b.barangay_name
                                            FROM 
                                                case_category c
                                            LEFT JOIN 
                                                mental_health_case m 
                                                ON c.case_category_id = m.case_category_id 
                                                AND m.barangay_id = :barangay_id
                                            LEFT JOIN 
                                                barangay b 
                                                ON b.barangay_id = :barangay_id
                                            GROUP BY 
                                                c.case_category_id, c.case_category_name, b.barangay_name
                                            -- ORDER BY 
                                            --     c.case_category_name;

                                            ");
            
            // Bind the parameter for barangay_id
            $stmt->bindParam(':barangay_id', $barangay_id, PDO::PARAM_INT);
            
            // Execute the query
            $stmt->execute();
            
            // Fetch the results as an associative array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            // Log the error message for debugging
            error_log("Error fetching data: " . $e->getMessage());
            // Return an empty array in case of error
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

    public static function get_case_of_specific_barangay($barangay_id) {
        try {
            $stmt = self::conn()->prepare("SELECT b.barangay_name,
                                            DATE_FORMAT(m.created_at, '%M') AS month,
                                                COUNT(m.case_id) AS case_count
                                            FROM 
                                                mental_health_case m
                                            LEFT JOIN barangay b ON m.barangay_id = b.barangay_id
                                            WHERE 
                                                m.barangay_id = :barangay_id
                                            GROUP BY 
                                                MONTH(m.created_at)
                                            ORDER BY 
                                                MONTH(m.created_at)
            ");
            $stmt->bindParam(':barangay_id', $barangay_id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error fetching data: " . $e->getMessage());
            return false;
        }
    }

    // Get the list of ages of the clients
    public static function get_overall_age(){
        try {
            $stmt = self::conn()->prepare("SELECT 
                                            CASE
                                                WHEN c.age < 18 THEN 'Under 18'
                                                WHEN c.age BETWEEN 18 AND 25 THEN '18-25'
                                                WHEN c.age BETWEEN 26 AND 30 THEN '26-30'
                                                WHEN c.age > 30 THEN 'Above 30'
                                            END AS age_group,
                                            COUNT(*) AS group_count
                                        FROM 
                                            mental_health_case m
                                        JOIN 
                                            client c ON m.client_id = c.client_id
                                        GROUP BY 
                                            age_group
                                        ORDER BY 
                                            age_group;
                                        ");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            error_log("Error fetching data: " . $e->getMessage());
            return false;
        }
    }

    
    
    
    
    
}
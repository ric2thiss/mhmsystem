<?php


require_once __DIR__ . '/../core/Model.php';


class Cases extends Model {
    // Get all cases without filter
    public static function all(){
        $sql = "WITH months AS (
                SELECT 1 AS month_num, 'January' AS month_name UNION ALL
                SELECT 2, 'February' UNION ALL
                SELECT 3, 'March' UNION ALL
                SELECT 4, 'April' UNION ALL
                SELECT 5, 'May' UNION ALL
                SELECT 6, 'June' UNION ALL
                SELECT 7, 'July' UNION ALL
                SELECT 8, 'August' UNION ALL
                SELECT 9, 'September' UNION ALL
                SELECT 10, 'October' UNION ALL
                SELECT 11, 'November' UNION ALL
                SELECT 12, 'December'
            )
            SELECT 
                mn.month_name,
                COALESCE(m.case_id, '') AS case_id,
                COALESCE(m.case_title, 'No Cases') AS case_title,
                COALESCE(m.case_description, 'No Description') AS case_description,
                COALESCE(m.client_id, '') AS client_id,
                COALESCE(b.barangay_name, 'N/A') AS barangay_name,
                COALESCE(p.purok_name, 'N/A') AS purok_name,
                COALESCE(cc.case_category_name, 'N/A') AS case_category_name,
                COALESCE(cs.name, 'N/A') AS case_severity_name,
                COALESCE(m.status, 'N/A') AS status,
                COUNT(m.case_id) OVER (PARTITION BY mn.month_num) AS case_count
            FROM months mn
            LEFT JOIN mental_health_case m 
                ON MONTH(m.created_at) = mn.month_num
            LEFT JOIN barangay b ON m.barangay_id = b.barangay_id
            LEFT JOIN purok p ON m.purok_id = p.purok_id
            LEFT JOIN case_category cc ON m.case_category_id = cc.case_category_id
            LEFT JOIN case_severity cs ON m.case_severity_id = cs.case_severity_id
            LEFT JOIN user u ON m.user_id = u.user_id
            ORDER BY mn.month_num, m.case_id;
            
            GROUP BY month_name
            "; 
        $stmt = self::conn()->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);



// WITH months AS (
//     SELECT 1 AS month_num, 'January' AS month_name UNION ALL
//     SELECT 2, 'February' UNION ALL
//     SELECT 3, 'March' UNION ALL
//     SELECT 4, 'April' UNION ALL
//     SELECT 5, 'May' UNION ALL
//     SELECT 6, 'June' UNION ALL
//     SELECT 7, 'July' UNION ALL
//     SELECT 8, 'August' UNION ALL
//     SELECT 9, 'September' UNION ALL
//     SELECT 10, 'October' UNION ALL
//     SELECT 11, 'November' UNION ALL
//     SELECT 12, 'December'
// )
// SELECT 
//     mn.month_name,
//     COALESCE(m.case_id, 'N/A') AS case_id,
//     COALESCE(m.case_title, 'N/A') AS case_title,
//     COALESCE(m.case_description, 'N/A') AS case_description,
//     COALESCE(c.client_fname, 'N/A') AS client_fname,
//     COALESCE(c.client_fname, 'N/A') AS client_lname,
//     COALESCE(b.barangay_name, 'N/A') AS barangay_name,
//     COALESCE(p.purok_name, 'N/A') AS purok_name,
//     COALESCE(cc.case_category_name, 'N/A') AS case_category_name,
//     COALESCE(cs.name, 'N/A') AS case_severity_name,
//     COALESCE(m.status, 'N/A') AS status,
//     COUNT(m.case_id) OVER (PARTITION BY mn.month_num) AS case_count
// FROM months mn
// LEFT JOIN mental_health_case m 
//     ON MONTH(m.created_at) = mn.month_num
// LEFT JOIN client c ON m.client_id = c.client_id
// LEFT JOIN barangay b ON m.barangay_id = b.barangay_id
// LEFT JOIN purok p ON m.purok_id = p.purok_id
// LEFT JOIN case_category cc ON m.case_category_id = cc.case_category_id
// LEFT JOIN case_severity cs ON m.case_severity_id = cs.case_severity_id
// LEFT JOIN user u ON m.user_id = u.user_id
// ORDER BY mn.month_num, m.case_id;
    }

    public static function get_month_cases_number(){
        $sql = "WITH months AS (
                SELECT 1 AS month_num, 'January' AS month_name UNION ALL
                SELECT 2, 'February' UNION ALL
                SELECT 3, 'March' UNION ALL
                SELECT 4, 'April' UNION ALL
                SELECT 5, 'May' UNION ALL
                SELECT 6, 'June' UNION ALL
                SELECT 7, 'July' UNION ALL
                SELECT 8, 'August' UNION ALL
                SELECT 9, 'September' UNION ALL
                SELECT 10, 'October' UNION ALL
                SELECT 11, 'November' UNION ALL
                SELECT 12, 'December'
                )

                -- Main query
                SELECT 
                    mn.month_name, 
                    COALESCE(COUNT(m.case_id), 0) AS case_count
                FROM months mn
                LEFT JOIN mental_health_case m 
                    ON MONTH(m.created_at) = mn.month_num
                LEFT JOIN client c ON m.client_id = c.client_id
                LEFT JOIN barangay b ON m.barangay_id = b.barangay_id
                LEFT JOIN purok p ON m.purok_id = p.purok_id
                LEFT JOIN case_category cc ON m.case_category_id = cc.case_category_id
                LEFT JOIN case_severity cs ON m.case_severity_id = cs.case_severity_id
                LEFT JOIN user u ON m.user_id = u.user_id
                GROUP BY mn.month_num, mn.month_name
                ORDER BY mn.month_num;
                ";
        $stmt = self::conn()->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    // sa kana na month kinsa na nga mga barangay nag naay cases base sa city level graph
    public static function get_scope_cases_to_specific_month($month)
    {
        try {
            // Updated SQL query to include purok and count cases
            $sql = "SELECT MONTHNAME(m.created_at) AS month_name, b.barangay_name, COUNT(m.case_id) AS case_count
                    FROM mental_health_case m
                    LEFT JOIN barangay b ON m.barangay_id = b.barangay_id
                    WHERE MONTHNAME(m.created_at) = :month_name
                    GROUP BY b.barangay_name";
            
            $stmt = self::conn()->prepare($sql);
            // Bind parameter correctly
            $stmt->bindParam(":month_name", $month, PDO::PARAM_STR);
            $stmt->execute();
            
            // Fetch and return data
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }





}
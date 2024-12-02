<?php


require_once __DIR__ . '/../core/Model.php';


class ResourceModel extends Model {
    public static function insertUtilization($case_id, $resource_id, $additional_description, $date_used){
        try{
            $sql = "INSERT INTO case_resource_utilization(case_id, resource_id, additional_description, date_used)
                    VALUES(:case_id, :resource_id, :additional_description, :date_used)";
                    $stmt = self::conn()->prepare($sql);
                    $stmt->bindParam(':case_id', $case_id);
                    $stmt->bindParam(':resource_id', $resource_id);
                    $stmt->bindParam(':additional_description', $additional_description);
                    $stmt->bindParam(':date_used', $date_used);
                    $stmt->execute();
                    return true;
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public static function insert($name, $type, $address, $contact_number) {
        try {
            $sql = "INSERT INTO resources(name, type, address, contact_number)
            VALUES(:name, :type, :address, :contact_number)";
            $stmt = self::conn()->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':contact_number', $contact_number);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public static function get_counts(){
        try{
            $sql = "SELECT COUNT(*) FROM resources";
            $stmt = self::conn()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public static function get_all(){
        try{
            $stmt = self::conn()->prepare("SELECT resource_id, name, type FROM resources");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error: " . $e->getMessage());
            return [];
        }
    }
}
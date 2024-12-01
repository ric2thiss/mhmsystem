<?php


require_once __DIR__ . '/../core/Model.php';


class ResourceModel extends Model {
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
}
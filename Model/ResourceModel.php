<?php


require_once __DIR__ . '/../core/Model.php';


class ResourceModel extends Model {
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
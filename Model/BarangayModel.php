<?php

require_once __DIR__ . '/../core/Model.php';

class BarangayModel extends Model{

    public static function all(){
        try{
            $stmt = self::conn()->query("SELECT * FROM barangay");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            error_log("Error fetching all users: " . $e->getMessage());
            return [];
        }
    }

    public static function show(){
        try{
            $stmt = self::conn()->prepare("SELECT 
                                            p.purok_id, p.purok_name 
                                        FROM purok p
                                        JOIN barangay b ON p.barangay_id = b.barangay_id
                                        WHERE b.barangay_id = :barangay_id
                                        ");
            $stmt->bindParam(':barangay_id', $_GET['id']);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            error_log("Error fetching all users: " . $e->getMessage());
            return [];
        }
    }
}
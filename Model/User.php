<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/../core/Model.php';

class User extends Model {
    // Retrieve all users
    public static function all() {
        try {
            $stmt = self::conn()->query("SELECT * FROM user");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error fetching all users: " . $e->getMessage());
            return [];
        }
    }

    // Find a user by ID
    public static function find($id) {
        try {
            $stmt = self::conn()->prepare("SELECT * FROM user WHERE user_id = :id LIMIT 1");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error finding user by ID: " . $e->getMessage());
            return null;
        }
    }


    // Find a user by email
    public static function findUserByEmail($email) {
        try {
            $stmt = self::conn()->prepare(" SELECT u.*, a.*
                                            FROM user u
                                            INNER JOIN account a ON a.user_id = u.user_id
                                            WHERE u.email = :email
                                            LIMIT 1
                                            ");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error finding user by email: " . $e->getMessage());
            return null;
        }
    }
}

<?php

class Model {
    protected static function conn() {
        $dsn = 'mysql:host=localhost;dbname=mhcmsystemv1;charset=utf8';
        $pdo = new PDO($dsn, 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
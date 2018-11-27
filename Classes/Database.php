<?php
namespace App\Classes;

use PDO;

class Database
{
    public static $host = "database";
    public static $dbName = "ads";
    public static $username = "root";
    public static $password = "root";

    private static function connect()
    {
        $host = self::$host;
        $dbName = self::$dbName;
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbName;charset=utf8",
            self::$username,
            self::$password
        );
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    public static function query($query, $params = array())
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetchAll();
        return $data;
    }
}

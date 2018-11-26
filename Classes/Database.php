<?php
class Database {

  public static $host = "127.0.0.1";
  public static $dbName = "ads";
  public static $username = "root";
  public static $password = "";

  private static function con() {
    $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  public static function query($query, $params = array()) {
    $stmt = self::con()->prepare($query);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    return $data;
  }
}
?>
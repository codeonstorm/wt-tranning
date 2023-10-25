<?php 
class DB {

  private static $conn;

  public static function conn(){
     if (self::$conn) return self::$conn;

     $servername = "localhost";
     $username = "root";
     $password = "@Team23";
     $dbname = "ems";
     
     try {
       self::$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return self::$conn;
     } catch(PDOException $e) {
       echo $e->getMessage(); die;
     }
  }

  public static function close(){
    self::$conn = null;
  }

}
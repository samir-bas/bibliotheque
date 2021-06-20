<?php
    class Database {

      const host = "localhost";
      const dbname = "bibliotheque";
      const user = "root";
      const password = ""; 
      private static $connection = null;

      public static function connect () {
        try {
          self::$connection = new PDO("mysql:host=" . self::host . ";dbname=" . self::dbname . ";", self::user, self::password);

        } catch(PDOException $e)  {
          die($e->getMessage());
        }
        return self::$connection;
      }

    }

?>
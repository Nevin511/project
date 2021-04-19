  <?php

  // Step 1: (12) Using either MySQLi or PDO
  // Create a connection to your MySQL DB and store it in a variable named $conn
  // CREATE YOUR CONNECTION BELOW THE LINE
    
  function connect () {
    $host = "localhost";
    $user = "root";
    $pass = null;
    $db = "project";

    try {
      $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

      return $conn;
    } catch (PDOException $e) {
      echo "<br>{$e->getCode()}: {$e->getMessage()}</br>";
      return false;
    }
  }
    
  
  // TOTAL POINTS POSSIBLE: 6

?>
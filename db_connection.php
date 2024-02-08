<?php 

class Connection{

    public static function connect(){
        require("includes/credentials.php");
        try{
            $conn = new PDO(
                "mysql:host=" . $credentials["server"] . ";dbname=" . $credentials["dbName"] . ";", 
                $credentials["user"], 
                $credentials["pass"]
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            exit("Error: ". $e->getMessage());
        }
        return $conn;
    }
}

?>
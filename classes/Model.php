<?php
require_once "classes" . DIRECTORY_SEPARATOR . "Database.php";
  
    class Model
    {
        public static function getAllDebitors() {
            $sqlDebitors = "SELECT * FROM debitors;";
            $resultDebitors = Database::query($sqlDebitors);
            
            $debitors = array();
            while ($row = $resultDebitors->fetch_assoc()) { 
                $debitors[] = $row;
            }
            return $debitors;
        }
    }
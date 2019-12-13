<?php
require_once "classes" . DIRECTORY_SEPARATOR . "Database.php";
    class Model
    {
        public static function getAllDebitors() { //\\// Funkce na dlužníky
            $sqlDebitors = "SELECT * FROM debitors;";
            $resultDebitors = Database::query($sqlDebitors);
            
            $debitors = array();

            while ($row = $resultDebitors->fetch_assoc()) { 
                $debitors[] = $row;
            }
            return $debitors;
        }
        public static function getAllDebts() { //\\// Funkce pro dluhy
            $sqlDebts = "SELECT * FROM debts;";
            $resultDebts = Database::query($sqlDebts);

            $debts = array();

            while ($row = $resultDebts->fetch_assoc()) {
                $debts[] = $row;
            }
            
            return $debts;
        }
    }
<?php
    Class Timber{
        public function __construct($db){
            $this->conn = $db;
        }
    
        function logIn($lumber){
            //$lumber = $Data['lumber'];
            
            $findName = "SELECT FirstName FROM customers WHERE '$lumber' = FirstName;";

            $ResultsF = $this->conn->prepare($findName);
            $ResultsF->execute();
            if($ResultsF->rowCount() == 1)  return true;
            else{
                return false;
            }
        }
    }
    
?>
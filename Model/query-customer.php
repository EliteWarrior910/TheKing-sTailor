<?php
    Class Customer{

        public function __construct($db){
            $this->conn = $db;
        }

        function verification($cust){
            $veri = "SELECT CustomerID FROM customers
                    WHERE '$cust' = CustomerID;";

            $stmt = $this->conn->prepare($veri);
            $stmt->execute();

            if($stmt->rowCount() == 1){
                return true;
            }
            else{
                return false;
            }
        }

    }


?>
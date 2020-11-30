<?php
    Class Transactions{

        public function __construct($db){
            $this->conn = $db;
        }

        function addTransact($data){

            $request = $data['request'];
            $cust = $data['cust'];
            $measurments = $data['measurments'];

            $insert = "INSERT INTO onlineTransactions(CustomerID, Request, Measurments)
                        VALUES('$cust', '$request', '$measurments');";

            $stmt = $this->conn->prepare($insert);
            $stmt->execute();

        }

    }
?>
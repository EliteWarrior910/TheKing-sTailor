<?php
    function logIn($Data){
        $name = $Data['FirstName'];
        
        $findName = "SELECT FirstName FROM customers";

        $ResultsF = $this->conn->prepare($findName);
        $ResultsF->execute();
        return $this->conn->lastInsertId();
    }
    echo"LogEcho";
?>
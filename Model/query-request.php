<?php
    echo"BeforeSubmitEcho";
    function submitRequest($Data){
        require './query-log.php';
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

        $findName = trim(htmlentities($POST['name']));

        $request = $DATA['Request'];
        $measurments = $DATA['Measurments'];
        echo"BeforeQueryEcho";
        
        $query1 = "SELECT CustomerID, Measurments FROM customers WHERE '$findName' = FirstName";
        $Results1 = $this->conn->prepare($query1);
        $Results1->execute();
        echo"$Results1";
        //$query2 = "INSERT INTO Onlinetransactions VALUES("
    
    }

?>
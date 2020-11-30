<?php
    require '../Model/query-customer.php';
    require '../Model/query-transactions.php';
    include './db_conn.php';
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $cust = trim(htmlentities($POST['cust']));
    $request = trim(htmlentities($POST['request']));
    //$measurments = trim(htmlentities($POST['Measurments']));
    $measurments = "placeholder";

    $database = new Database();
    $db = $database->connect();
    $customer = new Customer($db);
    $transaction = new Transactions($db);

    $consumerData = [
        "request" => $request,
        "cust" => $cust,
        "measurments" => $measurments
    ];

    if($customer->verification($cust)){
        //Insert information
        $transaction->addTransact($consumerData);
        echo"You done diddly did it";
    }
    else{
        echo"<p>Get yer face outta here</p>";
    }
?>
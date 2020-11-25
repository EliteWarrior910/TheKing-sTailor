<?php
    require '../Model/query-request.php';
    include './db_conn.php';

    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $findName = trim(htmlentities($POST['name']));
    $request = trim(htmlentities($POST['request']));
    $measurments = trim(htmlentities($POST['measurments']));

    $database = new Database();
    $db = $database->connect();

    $consumerData = [
        "request" => $request,
    ];

    if(isset($_POST['submit'])){

    }

?>
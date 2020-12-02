<?php
    session_start();
    require '../Model/query-log.php';
    include './db_conn.php';

    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $lumber = trim(htmlentities($POST['lumber']));

    $database = new Database();
    $db = $database->connect();
    $naming = new Timber($db);

    $alpineData = [
        "lumber" => $lumber
    ];
    
    if($naming->logIn($lumber)) $_SESSION['SomeOther'] = true;
    else{
        echo "Invalid Username or Password";
        $_SESSION['SomeOther'] = false;
    }
?>

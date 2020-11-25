<?php
    session_start();
    require '../Model/query-log.php';
    include './db_conn.php';

    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $findName = trim(htmlentities($POST['name']));


    $consumerData = [
        "name" => $name,
    ];

    $database = new Database();
    $db = $database->connect();
    
    if(isset($_POST['enter'])){
        if($_POST['name'] == '$findName' && $_POST['pass'] == '') $_SESSION['SomeOther'] = true;
        else{
            echo "Invalid Username or Password";
            $_SESSION['SomeOther'] = false;
        }
    }
    // else if(isset($_POST['pphh'])){
    //     unset($_POST['enter']);
    //     unset($_POST['pphh']);
    // }
?>

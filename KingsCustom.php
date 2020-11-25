<?php
    session_start();
    if($_SESSION['SomeOther'] == false) header('Location: https://localhost/FITWebDev/TheKing-sTailor/KingsLog.php?');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href='./View/Public/CustomKing.css'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        *{
            font-family: 'Times New Roman', Times, serif;
        }
        body{
            margin: 0;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class='page-grid'>
        <?php
            include './Controller/db_conn.php';

            $database = new Database();
            $db = $database->connect();
        ?>
        <div style='background-color: #444444; position: sticky; top: 0; z-index: 3; box-shadow: 5px 4px 10px 0px rgba(0, 0, 0, 0.45);'>
            <center><p style="font-size: 28px; color:rgb(192, 192, 192);"><a style='color:rgb(192, 192, 192);' href='KingsIndex.html'>Home</a>	&#8195;|	&#8195;<a style='color:rgb(192, 192, 192);' href='KingsStore.html'>Store</a>	&#8195;|	&#8195;<span style='color:#A78D3A;'>Custom Order</span>	&#8195;|	&#8195;Blog	&#8195;|	&#8195;Company	&#8195;|	&#8195;View More</p></center>
            <hr>
        </div>

        <div id="Whoa">
            <p>Put in your order here</p>
                <input type="text" id="request">
                <button name="submit" onclick="ajaxPeople(document.getElementById('request').value, <?php echo '$_POST[\'name\']'; ?>)">Submit Order</button>
        </div>


    </div>
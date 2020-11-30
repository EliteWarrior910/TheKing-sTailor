<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href='./View/Public/CustomKing.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        ?>
        <div style='background-color: #444444; position: sticky; top: 0; z-index: 3; box-shadow: 5px 4px 10px 0px rgba(0, 0, 0, 0.45);'>
            <center><p style="font-size: 28px; color:rgb(192, 192, 192);"><a style='color:rgb(192, 192, 192);' href='KingsIndex.html'>Home</a>	&#8195;|	&#8195;<a style='color:rgb(192, 192, 192);' href='KingsStore.html'>Store</a>	&#8195;|	&#8195;Custom Order	&#8195;|	&#8195;Blog	&#8195;|	&#8195;Company	&#8195;|	&#8195;View More</p></center>
            <hr>
        </div>


        <div class="login-grid">
            <div class="login-grid__item login-title">
                <h2>Login or Register</h2>
            </div>
            <div class="login-grid__item login-body">
                <img src='./View/Public/Images/Tailoring.jpg' alt='Some rando image' width='375px' height='350px'>
                <form action="KingsCustom.php" method="post">
                    <input type="text" placeholder="Name" name="name">
                    <input type="text" placeholder="Password" name="pass">
                    <div class="login-grid__item login-button">
                        <button name="enter">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
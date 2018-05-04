<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <link rel="icon" href="images/palm-tree.png">
    <title>Petrovic Travel</title>




</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img id="logo" src="images/palm-tree.png" alt="">

            </a>
            <h3>Petrović Travel</h4>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                                    <span class="sr-only">(current)</span>
                        </a>
                        </li>

                    </ul>

                </div>

                <div class="nav-login">
                    <?php
                    if(isset($_SESSION['u_id'])){
                        echo '<form action="includes/logout.inc.php" method ="POST">
                        
                        <button type = "submit" name="submit">Logout</button>
                        </form>';

                    }else{
                      echo'  <form action = "includes/login.inc.php" method = "POST">
                        <input type="text" name="uid" placeholder="Username/e-mail">
                        <input type="password" name="pwd" placeholder="password">
                        <button type="sumbit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>';

                    }
                    ?>
            
                </div>
        </div>
    </nav>
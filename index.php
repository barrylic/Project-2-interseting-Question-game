<?php session_start(); /* Starts the session */

if(!isset($_SESSION['Username'])){
	header("location:login.php");
	exit;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transition page</title>
    <style>
        span{
            font-size: 20pt;
            color: red;
        }
        a:hover{
            color: lightcoral;
        }
          .door{
            position: absolute;
            top: 10%;
            display: flex;
            width:80%;
            height: 1500pt;
            flex-wrap: wrap;
            font-size: large;
        }
        .box{
        width: 900pt;
        height: 250pt;
        border: solid 2px lightblue;
    }
    .box2{
        width: 900pt;
        height: 540pt;
        border: solid 2px lightblue;
    }
    .bob{
            width: 400pt;
            height: 100pt;
            border: solid 2px lightblue;
            border-radius: 10px;
            margin: 0 auto;
        }

    *{
    margin: 0;
    padding: 0;
}   
body{
    font-family: 'Times New Roman', Times, serif;
}
html{
    background-color:beige;
}

    .congrats{
        text-align: center;
        font-weight: bold;
    }

    </style>
</head>
<body>

    <?php

    echo "<div class='congrats'>Congratulations <em style='color:blue;''>".$_SESSION['Username']."</em>! You have logged into our Question page, are you ready? <br> Not you? Click this link to logout! <a href='logout.php'>Click here</a> to Logout.</div>";
    ?>

    <div class="door" >
        <div class="bob">
            <p style="text-align: center;">If you are <span>ready</span> to play game please click follow</p>
            <p style="text-align: center;"><a href="Question.html">click me</a></p>
        </div>
    </div>
</body>
</html>
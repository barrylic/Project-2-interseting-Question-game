<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
    <link rel="stylesheet" type="text/css" href="./css/game.css">
</head>
<body>

    <?php 

        $correct = 0;

        foreach($_POST as $key=>$val) {
            if ($val == 1)
                $correct++;
        }

        if ($correct < 1)
            $iq = random_int(50, 60);
        elseif ($correct < 2)
            $iq = random_int(60, 70);
        elseif ($correct < 3)
            $iq = random_int(70, 80);
        elseif ($correct < 4)
            $iq = random_int(80, 90);
        elseif ($correct < 5)
            $iq = random_int(90, 100);
        elseif ($correct < 6)
            $iq = random_int(100, 110);
        elseif ($correct < 7)
            $iq = random_int(110, 120);
        elseif ($correct < 8)
            $iq = random_int(120, 130);
        else
            $iq = random_int(130, 140);
 
    ?>
    <div class="bob">
    <div class="front">
        Bob: Thanks for playing!<br> Dear 
        <?php
        $n=1;
        if(isset($_COOKIE['username'])){
            $n= $_COOKIE['username'];
            $n++;
            }
            setcookie("username", $n);
        if(isset($_COOKIE["username"])){
        echo "Unknow Challenger number:". $n ."!" ;}
        else{
        echo "Unknow Challenger";}?> your IQ (Intelligence Quotient) has been determined.<br><br><br>
        
        <?php echo '<div class="iq">'.$iq."!</div>"; ?>
    </div>
    </div>
    <div class="board">
    <?php
            echo '<table style="width: 400px;align="center" cellpadding="1px" cellspacing="1px">';
            $count=0;
            for($x=0;$x<1;$x++){
                echo "<tr>";
                for($y=0;$y<2;$y++){
                    $count+=1;
                    if($count%2==0){
                       echo '<td style="width: 35px; height:35px" >Score='.$iq.'</td>';
                    }
                    else{
                        echo '<td style="width: 35px; height:35px">Unknow player'.$n. '</td>';
                    }
                }
                echo "</tr>";
            }
            echo "</table>";

            ?>
    </div>
    <br>
    <div class="share">
        <a href="https://www.facebook.com/"><img src="./css/facebook.png" alt="Share to Facebook" class="icon"></a>
        <a href="https://twitter.com/"><img src="./css/twitter.png" alt="Share to Twitter" class="icon"></a>
        <a href="https://www.instagram.com/"><img src="./css/instagram.png" alt="Share to Instagram" class="icon"></a>
        <a href="https://www.reddit.com/"><img src="./css/reddit.png" alt="Share to Reddit" class="icon"></a>
        <br>
        Share your results!
        <br>
        <a href="Question.html">Take the quiz again!</a>
    </div> 
    <center><img src="./css/brain.png" class="brain" width="300px"></center>

</body>
</html>
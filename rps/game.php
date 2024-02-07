<?php

// Demand a GET parameter
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
    die('Name parameter missing');
}

// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}

// Set up the values for the game...
// 0 is Rock, 1 is Paper, and 2 is Scissors
$names = array('Rock', 'Paper', 'Scissors');
$human = isset($_POST["human"]) ? $_POST['human']+0 : -1;

$computer = 0; // Hard code the computer to rock
// TODO: Make the computer be random
// $computer = rand(0,2);

// This function takes as its input the computer and human play
// and returns "Tie", "You Lose", "You Win" depending on play
// where "You" is the human being addressed by the computer
// function check($computer, $human) {
//     // For now this is a rock-savant checking function
//     // TODO: Fix this
//     if ( $human == 0 ) {
//         return "Tie";
//     } else if ( $human == 1 ) {
//         return "You Win";
//     } else if ( $human == 2 ) {
//         return "You Lose";
//     }
//     return false;
// }

// Check to see how the play happenned
// $result = check($computer, $human);

?>
<!DOCTYPE html>
<html>
<head>
<title>Khawar Khan's Rock, Paper, Scissors Game</title>
<?php require_once "bootstrap.php"; ?>
</head>
<body>
<div class="container">
<h1>Rock Paper Scissors</h1>
<?php
if ( isset($_REQUEST['name']) ) {
    echo "<p>Welcome: ";
    echo htmlentities($_REQUEST['name']);
    echo "</p>\n";
}
?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<select name="human">
<option value="-1">Select</option>
<option value="0">Rock</option>
<option value="1">Paper</option>
<option value="2">Scissors</option>
<option value="3">Test</option>
</select>
<input type="submit" value="Play" name="play">
<input type="submit" name="logout" value="Logout">
</form>

<pre>
<?php
    if ( isset($_POST['play']) ) {
        function check($p,$com){
            //  return "wow";
            if($p==$com){
                return "Tie";
            } else if($p=="rock"){
                if($com == "paper"){
                    return "You lose";
                } else{
                    return "You win";
                }
            } elseif($p=="paper"){  
                if($com == "rock"){
                    return "You win";
                } else{
                    return "You lose";
                }
            }
             elseif($p == "scissor"){
                if($com == "rock"){
                    return "You lose";
                } else{
                    return "You win";
                }
    
            }
        }
    $names = ["rock","paper","scissor"];

    if( isset($_POST['selection'])){
        // echo "User selected : ".$_POST['selection'];
        if($_POST['selection'] == 'nothingSelected'){
            echo 'Please select a strategy and start play.';
        } else{
            $h = $_POST['selection'];
            if($h != 'test'){
                $computer = rand(0,2);
                $c = $names[$computer];
                $result = check((string)$h,(string)$c);
                // echo $result;
                echo "Human=".$h."   Computer=".$c."   Result=".$result."\n";
            } else{
                echo "\n";
                for($human=0;$human<3;$human++){
                    for($computer=0;$computer<3;$computer++){
                        echo "Human=".$names[$human]."   Computer=".$names[$computer]."   Result=".check($names[$human],$names[$computer])."\n";
                    }
                }
            }

            }

    } else{
        echo "Please select a strategy and start play.";
    }
}
?>
</pre>
</div>
</body>
</html>

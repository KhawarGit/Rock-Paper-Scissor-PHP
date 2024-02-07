<?php
 if(! isset($_GET['name']) || strlen($_GET['name']) < 1){
    die("name Parameter is Missing.");
 }  
?>
<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2b6696e9</title>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <p>Welcome : <?php echo $_GET["name"] ?></p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <select name="selection">
            <option value="nothingSelected">select</option>
            <option value="test">test</option>
            <option value="rock">rock</option>
            <option value="paper">paper</option>
            <option value="scissor">scissor</option>
        </select>
        <button>Play</button>
    </form>
    <form action="Logout.php" method="POST">
        <button>Logout</button>
    </form>
    <pre style="background-color: papayawhip;">
    <?php
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
    ?>
    </pre>
</body>
</html>
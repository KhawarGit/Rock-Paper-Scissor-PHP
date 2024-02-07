<?php
    // if($_POST['LogIn']){

    // }
   function checkPass($password){
        $ans = "1a52e17fa899cf40fb04cfc42e6352f1";
        $toCheck = "XyZzy12*_".(string)$password;
        $toCheckHash = hash('md5',$toCheck);
        if($toCheckHash==$ans){
            return true;
        }
        return false;

   }
   
    if(!$_POST['who'] || !$_POST['pass']){
        echo '<p style="color: red;">User Name and Password are required.</p>';
        include "./login.php";
        exit;
    } elseif(!checkPass($_POST['pass'])){
        echo '<p style="color: red;">Incorrect Password.</p>';
        include "./login.php";
        exit;
    } else{
        header("Location: game.php?name=".urlencode($_POST['who']));
    }
   

?>
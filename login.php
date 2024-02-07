<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2b6696e9</title>
</head>
<body>
    <h1>Please Log In</h1>
    <form action="./checkingLogin.php" method="POST">
    <label for="name">User Name </label>
        <input type="text" name="who">
        <br>
        <label for="password">Password </label>
        <input type="text" name="pass"><br>
        <!-- the Password is the servside language name I used for this assignment followed by 123 -->
        <!-- 
     -->
        <button value="LogIn">Log In</button>
        <!-- <input type="submit" name="LogIn" value="Log In"> -->
        
    </form>
    <form action="cancelLogin.php" method="POST">
        <!-- <input type="submit" name="Cancel" value="Cancel" > -->
        <button value="Cancel">Cancel</button>
    </form>
    
    <p>For a password hint, view source and find a password hint in yhe HTML comments.</p>
</body>
</html>
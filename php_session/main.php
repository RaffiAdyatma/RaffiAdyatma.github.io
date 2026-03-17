<?php
session_start();
$secretUser = "secret";
$secretPassword = "secretpass";

if (isset($_SESSION["login"])==true) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
$username = $_POST["user"];
$password = $_POST["pass"];


    if ($secretUser==$username && $secretPassword==$password) {
        $_SESSION["username"] = $username;
        $_SESSION["login"] = true;

        header("Location: dashboard.php");
        exit();
    }
    else{
        echo "go away";
    }
}  

?>

<html>

<head>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="center">
        <form action="" method="POST">
            Username: <input type="text" name="user"><br><br>
            Password: <input type="text" name="pass"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    
</body>

</html>
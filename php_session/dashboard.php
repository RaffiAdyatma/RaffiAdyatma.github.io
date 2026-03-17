<?php
session_start();
$username = "";

if ($_SESSION["login"]==false) {
    header("Location: main.php");
}
else {
    $username = $_SESSION["username"];
}
?>

<html>
<head>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="center">
        halo <?php echo $username?><br><br>
        <form action="logout.php" method="POST">
            <input type="submit" name="log out">
        </form>
    </div>
</body>

</html>
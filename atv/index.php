<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'db_school') or die ('Unable To Connect');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/tailwind.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Atv</title>
</head>
<body>

    <h2>Please Login</h2>

    <div> 
        <form action="index.php" method="post">
            <input type="text" name="Username" placeholder="Username" required = ""><br>
            <input type="password" name="Pass" placeholder="Password" required = ""><br>
            <input type="submit" name="login" value="Login" required = "">
            </form>
    </div>

</body>
</html>


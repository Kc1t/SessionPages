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
    <link rel="stylesheet" href="public/conit/tailwind.css">
    <link rel="stylesheet" href="public/conit/style.css">
    <title>Atv</title>
</head>
<body>


    <!-- <h2>Please Login</h2> -->
    <br>

    <div> 
        <form action="index.php" method="post">
            <input class="field" type="text" name="Username" placeholder="Username" required = ""><br>
            <input class="field" type="password" name="Pass" placeholder="Password" required = ""><br>
            <input class="field" type="submit" name="login" value="Login" >
            </form>
    </div>

<?php
    if(isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Pass = $_POST['Pass'];

    $select = mysqli_query($conn, "SELECT * FROM tb_student WHERE Username = '$Username' AND Pass = '$Pass' ");
    $row = mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["Username"] = $row ['Username'];
        $_SESSION["Pass"] = $row ['Pass'];
    }else{
        echo '<script type="text/javascript">';
        echo 'alert("Invalid Username or Password");';
        echo 'window.location.href = "index.php"';
        echo '</script>';
    }
    }
    if(isset($_SESSION["Username"])){
        header("Location:login.php");
    }

?>

</body>
</html>


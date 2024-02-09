
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<form action="" method="post" >
    User ID<input type="number" name="userID">
<br>
User Name <input type="text" name="username">
<button type="submit" value="Submit">ok</button>

</form>


<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){



$_SESSION['userId']=$_POST["userID"];
$_SESSION['username']=$_POST["username"];

//  header("Location: view_session.php");

}

?>

</body>
</html>

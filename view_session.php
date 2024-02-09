



<?php
session_start();

if(isset($_SESSION['userId'])){
echo $_SESSION['userId'];
echo "<br>";
echo $_SESSION['username'];



}else{
    echo"session is not set.";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="logout.php" method="post">

Do you want to logout yes or no <br>
<button type="submit">yes</button>
</form>    
<button type="submit">no</button>

</body>
</html>
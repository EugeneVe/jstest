<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
    $host="localhost";
    $user="kmwqjqwy";
    $password="auy9Y686Xd";
    $bd_name="kmwqjqwy_users";

    $connect = mysqli_connect($host,$user,$password);
    mysqli_select_db($bd_name,$connect);

    if($connect == true) {
        header("location: http://www.click.s-host.net/mysqlok.html");

    }
    else {
        header("location: http://www.click.s-host.net/error.html");
    }
?>


</body>
</html>

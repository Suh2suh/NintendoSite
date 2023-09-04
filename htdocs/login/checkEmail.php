<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nintendo | EmailCheck</title>
    <style>
        body{
            background-color: #eee;
        }
        p{
            padding-top: 20%;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    $email = $_GET["useremail"];

    $con = mysqli_connect("localhost", "user1", "12345", "test");
    $sql = "select * from members where email='$email'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);
    if($num_record)
    {
?>
        <p>이미 사용 중인 이메일입니다.</p>
<?php    
    }
    else
    {?>
        <p>Nintendo에 오신 것을 환영합니다!</p>
<?php
    }
    mysqli_close($con);
?>
</body>
</html>
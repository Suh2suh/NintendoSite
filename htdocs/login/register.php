<?php
    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 

    $registDay = date("Y-m-d (H:i)"); 

    $con = mysqli_connect("localhost", "user1", "12345", "test");
    $sql = "insert into members(name, email, pass, registdate)";
    $sql .= "values('$name', '$email', '$password', '$registDay')";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo("<script>
            location.href = '../index.php'; 		
        </script>");
?>
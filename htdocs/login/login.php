<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nintendo | Login</title>
    <link rel = "icon" href = "/img/main/PageLogo.png" type = "image/x-icon">
</head>
<body>
    <?php
        $email = $_POST["email"];
        $pass = $_POST["password"];

        $con = mysqli_connect("localhost", "user1", "12345", "test");
        $sql = "select * from members where email='$email'";
        $result = mysqli_query($con, $sql);

        $num_match = mysqli_num_rows($result);

        if(!$num_match)
        {
            echo("
                <script>
                    window.alert('등록되지 않은 아이디입니다')
                    history.go(-1)
                </script>
                ");
        }
        else
        {
            $row = mysqli_fetch_array($result);
            $db_pass = $row["pass"];

            mysqli_close($con);

            if($pass != $db_pass)
            {
                echo("
                    <script>
                        window.alert('잘못된 비밀번호입니다')
                        history.go(-1)
                    </script>
                ");
                exit;
            }
            else{
                session_start();
                $_SESSION["useremail"] = $row["email"];
                $_SESSION["username"] = $row["name"];

                echo("
                    <script>
                        location.href = '../index.php'
                    </script>
                ");
            }
        }
    ?>

    <script>
        location.href = "../index.php";
    </script>
</body>
</html>
<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["useremail"])) 
		$useremail = $_SESSION["useremail"];
    else 
		$useremail = "";
    
	if (isset($_SESSION["username"]))
		$username = $_SESSION["username"];
    else 
		$username = "";

    if ( !$username )
    {
        echo("
                <script>
                alert('질문하기는 로그인 후 이용해주세요');
                location.href = '/login/loginForm.php';
                </script>
        ");
                exit;
    }

  $title = $_POST["title"];
  $category = $_POST["postSelect"];
  $content = $_POST["content"];
  $registerDay = date("Y-m-h");

	$title = htmlspecialchars($title, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);
	
	$con = mysqli_connect("localhost", "user1", "12345", "test");

	$sql = "insert into qnaboard (category, title, content, writer, registerday) ";
	$sql .= "values('$category', '$title', '$content', '$username', '$registerDay')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'qnaBoardListForm.php';
	   </script>
	";
?>

  

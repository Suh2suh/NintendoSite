<?php
    $num = $_GET["num"];

    $category = $_POST["postSelect"];
    $title = $_POST["title"];
    $content = $_POST["content"];
          
    $con = mysqli_connect("localhost", "user1", "12345", "test");
    $sql = "update qnaboard set title='$title', content='$content', category='$category'";
    $sql .= "where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'qnaBoardListForm.php';
	      </script>
	  ";
?>

   

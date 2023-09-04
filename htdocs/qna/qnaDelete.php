<?php
    $num   = $_GET["num"];

    $con = mysqli_connect("localhost", "user1", "12345", "test");
    $sql = "select * from qnaboard where num = $num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $sql = "delete from qnaboard where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'qnaBoardListForm.php?page=1';
	     </script>
	   ";
?>


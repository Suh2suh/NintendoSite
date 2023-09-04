<?php
    session_start();
    unset($_SESSION["username"]);
    
    echo("<script>
            location.href = '../index.php';
            alert('로그아웃되었습니다.');
        </script>");
?>
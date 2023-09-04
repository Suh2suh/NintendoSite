<?php
@session_start();
echo("
    <!-- JQuery 삽입 -->
    <script  src='http://code.jquery.com/jquery-latest.min.js'></script>
    <script src='js/script.js'></script>

    <!--header menu script-->
    <script>
        $(function(){
            $('.subMenu').hide();
            $('.menuSection').hover(function(){
                $(this).find('.subMenu').slideDown();
                $(this).hover(function(){

                }, function(){
                    $(this).find('.subMenu').slideUp();
                })
            });
        });
    </script>
    ");
?>

<ul id="menuList">
    <li id="logoSection">
        <a href="/index.php">
            <img src="https://www.nintendo.co.kr/images/renew/common/logo_nintendo_red_m.gif" alt="">             
        </a>
    </li>
    <li class="menuSection">
            <a href="">Nintendo Switch</a>
            <ul class="subMenu">
                <li><a href="">Nintendo Switch OLED 모델</a></li>
                <li><a href="">Nintendo Switch</a></li>
                <li><a href="">Nintendo Switch Lite</a></li>
                <li><a href="">기능, 특징을 비교</a></li>
                <li><a href="">주변기기</a></li>
                <li><a href="">Nintendo Switch Online</a></li>
                <li><a href="">Nintendo 지킴이 Switch</a></li>
                <li><a href="">닌텐도 e숍</a></li>
            </ul>   
    </li>
    <li class="menuSection" class="needToPull">
            <a href="">닌텐도 3DS</a>
            <ul class="subMenu">
                <li><a href="">닌텐도 3DS란?</a></li>
                <li><a href="">New 닌텐도 3DS XL</a></li>
                <li><a href="">New 닌텐도 2DS XL</a></li>
                <li><a href="">기타 시리즈</a></li>
                <li><a href="">닌텐도 e숍</a></li>
            </ul>
    </li>
    <li class="menuSection">
            <a href="/software/software.php">소프트웨어</a>
            <ul class="subMenu">
                <li><a href="">Nintendo Switch 소프트웨어</a></li>
                <li><a href="">Nintendo 3DS 소프트웨어</a></li>
                <li><a href="">발매 예정 소프트웨어</a></li>
                <li><a href="">스마트폰용 앱</a></li>
            </ul>
    </li>
    <li class="menuSection">
            <a href="/qna/qnaBoardListForm.php">고객지원</a>
            <ul class="subMenu">
                <li><a href="">Nintendo Switch 고객지원</a></li>
                <li><a href="">Nintendo Switch Online 서포트</a></li>
                <li><a href="">Nintendo 3DS 고객지원</a></li>
                <li><a href="">고객지원 홈페이지</a></li>
                <li><a href="">네트워크 장애 발생 상황</a></li>
            </ul>
    </li>
    <li class="menuSection">
            <a href="/news/news.php">News</a>
            <ul class="subMenu">
                <li><a href="">News</a></li>
                <li><a href="">보도자료</a></li>
                <li><a href="">알림</a></li>
            </ul>
    </li>
    <li id="loginSection">
        <?php 
        if (isset($_SESSION["username"])) 
            $username = $_SESSION["username"]; 
        else 
            $username = "";

        if(!$username){?>
            <a href="/login/loginForm.php">
                LOGIN
            </a>
            <?php
        }
        else{?>
            <a href="/login/logout.php">
                LOGOUT
            </a>
        <?php
        }?> 
    </li>
    <li id="searchSection">
        <a href="">
            <img src="/img/main/searchIconPhone.png" alt="" id="phoneSearch">
            <img src="/img/main/searchIconPC.png" alt="" id="PCSearch">
        </a>
    </li>
</ul>
<?php
echo("
    <!-- JQuery 삽입 -->
    <script  src='http://code.jquery.com/jquery-latest.min.js'></script>
    <script src='js/script.js'></script>");
?>

<div>
    <div id="footDivider">
        <div id="footLogo"><img src="https://www.nintendo.co.kr/images/renew/common/logo_nintendo_red_m.gif" alt=""></div>
        <div id="topIcon" onclick="window.scrollTo(0,0);">↑</div>
    </div>
    <ul id="footIconList">
        <li>
            <div id="snsIcons">
                <div onclick="location.href=''"><img src="/img/main/foot_youtube.png" alt=""></div>
                <div onclick="location.href=''"><img src="/img/main/foot_kakao.png" alt=""></div>
                <div onclick="location.href=''"><img src="/img/main/foot_facebook.png" alt=""></div>
                <div onclick="location.href=''"><img src="/img/main/foot_twitter.png" alt=""></div>
            </div>
        </li>
        <li>
            <div id="myNinIcon" onclick="location.href=''">
                <img src="/img/main/foot_mynintendo.png" alt="">
            </div>
        </li>
        <li>
            <div id="amiiboIcon" onclick="location.href=''">
                <img src="/img/main/foot_amiibo.png" alt="">
            </div>
        </li>
    </ul>
    <div id="footTextSection">
        <div>
            <p>이용약관 | 개인정보취급방침</p>
            <p>고객지원 문의전화 : 1670-9900 (평일 오전 9시 30분~오후 5시 30분) <br>※토/일/공휴일/회사 정기휴일 및 특별휴일 제외</p>
            <p>ⓒ 2006 Nintendo of Korea Co., Ltd. All Rights Reserved.
            <br>상호명 : 한국닌텐도주식회사 대표자명 : 미우라 타카히로 사업자등록번호 : 120-87-03578</p>    
        </div>
    </div>
</div>
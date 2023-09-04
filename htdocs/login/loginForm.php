<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=false, maximum-scale=2.0">
    <title>Nintendo | Login</title>
    <link rel = "icon" href = "/img/main/PageLogo.png" type = "image/x-icon">
    <link rel='stylesheet' href='../css/common.css?v=7'>
    <link rel='stylesheet' href='../css/loginform.css?v=2'>
    <!-- Link Swiper's CSS -->
    <link rel='stylesheet' href='https://unpkg.com/swiper/swiper-bundle.min.css'>

</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="mainContents">
            <article id="loginArticle">
                <h2>닌텐도 어카운트</h2>
                <div id="loginWrap">
                    <div id="loginWrap2">
                        <form action="login.php" method="post" id="loginForm">
                            <input type="text" name="email" placeholder="메일 주소/로그인 ID" required><br>
                            <input type="password" name="password" placeholder="암호" required><br>
                            <a href="">암호를 잊어버린 경우</a>
                            <button type="submit" id="loginBtn">로그인</button>
                        </form>

                        <div id="snsLogins">
                            <h4>다른 어카운트로 간단 로그인</h4>
                            <ul>
                                <li><div id="facebookLogin">Facebook</div></li>
                                <li><div id="googleLogin">Google</div></li>
                                <li><div id="twitterLogin">Twitter</div></li>
                                <li><div id="appleLogin">Apple로 로그인</div></li>
                            </ul>
                        </div>

                        <div id="registerZone">
                            <h3>어카운트가 없는 분은</h3>
                            <div onclick="location.href='registerForm.php'" id="registerBtn"><p>신규 작성</p></div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        
        <footer id="foot">
            <?php include("../footer.php"); ?>
        </footer>
    </div>
</body>
</html>
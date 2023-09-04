<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=false, maximum-scale=2.0">
    <title>Nintendo | Register</title>
    <link rel = "icon" href = "/img/main/PageLogo.png" type = "image/x-icon">
    <link rel='stylesheet' href='../css/common.css?v=7'>
    <link rel='stylesheet' href='../css/registerform.css?v=3'>
    <!-- Link Swiper's CSS -->
    <link rel='stylesheet' href='https://unpkg.com/swiper/swiper-bundle.min.css'>
    <style>



    </style>

    <script>
        /* 이메일 중복 체크 필요 */
    function check_id(){
        var useremail = document.getElementById("uemail").value;
        if(useremail)
        {
            url = "checkEmail.php?useremail=" + useremail;
            window.open(url, "IDcheck", "width = 350, height = 200");
        }
        else
        {
            alert("아이디를 입력하세요.");
        }
    }
    function check_pw(){
        var pw1 = document.getElementById("upassword").value;
        var pw2 = document.getElementById("upassword2").value;

        if(pw1 != pw2)
        {
            alert("패스워드가 일치하지 않습니다");
            return false;
        }
        else
        {
            return true;
        }
    }
    
    </script>
</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="mainContents">
            <article id="registerArticle">
                <h2>닌텐도 어카운트 작성</h2>

                <div id="snsLogins">
                    <h4>다음 어카운트를 가지고 있는 경우, 간단하게 닌텐도 어카운트를 작성할 수 있습니다.</h4>
                    <ul>
                        <li><div id="facebookLogin">Facebook</div></li>
                        <li><div id="googleLogin">Google</div></li>
                        <li><div id="twitterLogin">Twitter</div></li>
                        <li><div id="appleLogin">Apple로 로그인</div></li>
                    </ul>
                </div>

                <div id="registerWrap">
                    <div id="registerWrap2">
                        <h4>위의 어카운트를 가지고 있지 않은 경우에는 아래 정보를 입력해주십시오. </h4>
                        <form action="register.php" method="post" id="registerForm">
                            <div id="nicknameSection">
                                <label for="">닉네임</label>
                                <input type="text" name="name" id="uname" placeholder="10자 이내" required>
                                <p>※닌텐도로부터의 연락에 사용됩니다. 무단으로 다른 사람에게 공개되지는 않습니다.</p>
                            </div>
                            <div id="emailSection">
                                <label for="">메일 주소/로그인 ID</label>
                                <input type="text" name="email" id="uemail" placeholder="메일 주소/로그인 ID" required>
                                <p>※컴퓨터나 Web 메일의 주소를 권장합니다.</p>
                                <input type="button" name="emailCheck" id="uemailCheck" value="중복 체크" required onclick="check_id()">
                            </div>
                            <div>
                                <label for="">암호</label>
                                <input type="password" name="password" id="upassword" placeholder="암호를 입력해주세요" required>
                            </div>
                            <div>
                                <label for="">암호 재입력</label>
                                <input type="password" name="passwordCheck" id="upassword2" placeholder="암호를 다시 입력해주세요" required>
                            </div>
                            <div id="checkboxSection">
                                <input type="checkbox" value="동의" required><label for="">닌텐도 어카운트의 이용 약관 및 개인정보취급방침에 동의합니다</label>
                            </div>
                            <button type="submit" id="registerBtn" onclick="check_pw()">등록</button>
                        </form>
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
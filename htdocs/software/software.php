<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=false, maximum-scale=2.0">
    <title>Nintendo</title>
    <link rel = "icon" href = "../img/main/PageLogo.png" type = "image/x-icon">
    <link rel='stylesheet' href='../css/common.css?v=7'>
    <link rel='stylesheet' href='../css/software.css'>

</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="mainContents">
            <section id="softwareTopper">
                <h2 class="TopperTitle">Nintendo Switch 소프트웨어</h2>
                <div id="TopperBtn" onclick="location.href=''"><p>전체 소프트웨어 보기 →</p></div>
            </section>

            <article>
                <ul id="softwareArrays">
                    <li class="mainSoftware"><img src="/img/main/main_thumbnail2.jpg" alt=""></li>
                    <li class="mainSoftware"><img src="/img/main/main_thumbnail3.jpg" alt=""></li>
                    <li class="mainSoftware"><img src="/img/main/main_thumbnail5.jpg" alt=""></li>
                    <li class="mainSoftware"><img src="/img/main/main_thumbnail7.jpg" alt=""></li>
                    <li class="subSoftware"><img src="/img/software/softwarepic_1.jpg" alt=""></li>
                    <li class="subSoftware"><img src="/img/software/softwarepic_2.jpg" alt=""></li>
                    <li class="subSoftware"><img src="/img/software/softwarepic_3.jpg" alt=""></li>
                    <li class="subSoftware"><img src="/img/software/softwarepic_4.jpg" alt=""></li>
                    <li class="subSoftware"><img src="/img/software/softwarepic_5.jpg" alt=""></li>
                    <li class="subSoftware"><img src="/img/software/softwarepic_6.jpg" alt=""></li>
                </ul>
            </article>

            <article id="languageInfo">
                <div id="koreanInfo">
                    <div class="languageIcon"><img src="/img/software/koreanLogo.png" alt=""></div>
                    <p>대응 언어는 한국어입니다.<br>
                        ※일부 자막 혹은 음성 등이 외국어인 경우가 있습니다.</p>
                </div>
                <div id="foreignInfo">
                    <div class="languageIcon"><img src="/img/software/koreanLogo.png" alt=""></div>
                    <p>대응 언어는 외국어입니다.<br>
                        ※한국어에는 대응하지 않습니다.</p>
                </div>
            </article>

            <article id="softwareArticle">
                <h3 class="articleTitle">최신 소프트웨어<span> New Title</span></h3>
                <ul id="softwareWrap">
                    <?php
                        $con = mysqli_connect("localhost", "user1", "12345", "test");
                        $sql = "select * from softwareboard order by num desc";
                        $result = mysqli_query($con, $sql);
                        $total_record = mysqli_num_rows($result); // 전체 글 수

                        for ($i=$total_record; $i<$total_record + 8; $i++)
                        {
                            mysqli_data_seek($result, $i);
                            // 가져올 레코드로 위치(포인터) 이동
                            $row = mysqli_fetch_array($result);
                            // 하나의 레코드 가져오기
                            $num         = $row["num"];
                            $title       = $row["title"];
                            $category    = $row["category"];
                            $imageurl    = $row["imageurl"];
                            $pagelink    = $row["pagelink"];
                            $date        = $row["date"];
                            $company     = $row["company"];
                    ?>
                    <li class="newNews">
                        <div class="newsImg" onclick="ltiocaon.href=''"><img src="<?=$imageurl?>" alt=""></div>
                        <h5 class="newsCategory"><?=$category?></h5>
                        <p class="newsTitle"><?=$title?></p>
                        <p class="newsDate"><?=$date?></p>
                        <p class="newsCompany"><?=$company?></p>
                    </li>
                    <?php
                        }
                        mysqli_close($con);
                    ?>
                </ul>

                <div id="moreSoftwareBtn" onclick="location.href=''">더 많은 소프트웨어 보기 >></div>
            </article>

            <article id="newsArticle">
                <h3 class="articleTitle">새롭게 알려 드립니다<span> News & Update</span></h3>
                <ul id="newsWrap">
                    <?php
                        $con = mysqli_connect("localhost", "user1", "12345", "test");
                        $sql = "select * from newsboard order by num desc";
                        $result = mysqli_query($con, $sql);
                        $total_record = mysqli_num_rows($result); // 전체 글 수

                        for ($i=$total_record; $i<$total_record + 4; $i++)
                        {
                            mysqli_data_seek($result, $i);
                            // 가져올 레코드로 위치(포인터) 이동
                            $row = mysqli_fetch_array($result);
                            // 하나의 레코드 가져오기
                            $num         = $row["num"];
                            $title       = $row["title"];
                            $category    = $row["category"];
                            $imageurl    = $row["imageurl"];
                            $pagelink    = $row["pagelink"];
                            $date        = $row["date"];
                    ?>
                    <li class="newNews">
                        <div class="newsImg" onclick="ltiocaon.href=''"><img src="<?=$imageurl?>" alt=""></div>
                        <h5 class="newsCategory"><?=$category?></h5>
                        <p class="newsTitle"><?=$title?></p>
                        <p class="newsDate"><?=$date?></p>
                    </li>
                    <?php
                        }
                        mysqli_close($con);
                    ?>
                </ul>
            </article>

            <article id="moreInfos">
                <ul>
                    <li>
                        <div class="moreWrap" onclick="location.href=''">
                            <div class="moreText">닌텐도 3DS 소프트웨어 ></div>
                        </div>
                    </li>
                    <li>
                        <div class="moreWrap" onclick="location.href=''">
                            <div class="moreText">amiibo ></div>
                        </div>
                    </li>
                    <li>
                        <div class="moreWrap" onclick="location.href=''">
                            <div class="moreText">Nintendo Switch  고객지원 ></div>
                        </div>
                    </li>
                </ul>
            </article>
        </section>
        
        <footer id="foot">
            <?php include("../footer.php"); ?>
        </footer>
    </div>
</body>
</html>
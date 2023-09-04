<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=false, maximum-scale=2.0">
    <title>Nintendo</title>
    <link rel = "icon" href = "../img/main/PageLogo.png" type = "image/x-icon">
    <link rel='stylesheet' href='../css/common.css?v=7'>
    <link rel='stylesheet' href='../css/news.css'>
</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="mainContents">
            <section id="newsTopper">
                <h3 id="topperTitle">News</h3>

            </section>
            <article id="News">
                <ul id="newsWrap">
                    <?php
                        $con = mysqli_connect("localhost", "user1", "12345", "test");
                        $sql = "select * from newsboard order by num desc";
                        $result = mysqli_query($con, $sql);
                        $total_record = mysqli_num_rows($result); // 전체 글 수

                        for ($i=$total_record; $i<$total_record + 16; $i++)
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
                        <div class="newsImg" onclick="location.href=''"><img src="<?=$imageurl?>" alt=""></div>
                        <h5 class="newsCategory"><?=$category?></h5>
                        <p class="newsTitle"><?=$title?></p>
                        <p class="newsDate"><?=$date?></p>
                        <p class="newsSoftware">Nintendo Switch</p>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
                <div id="moreBtn" onclick="location.href=''">더보기 +</div>
            </article>
        </section>
        
        <footer id="foot">
            <?php include("../footer.php"); ?>
        </footer>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=false, maximum-scale=2.0">
    <title>Nintendo</title>
    <link rel = "icon" href = "./img/main/PageLogo.png" type = "image/x-icon">
    <link rel='stylesheet' href='./css/common.css?v=5'>
    <link rel='stylesheet' href='./css/main.css'>
    <!-- Link Swiper's CSS -->
    <link rel='stylesheet' href='https://unpkg.com/swiper/swiper-bundle.min.css'>
</head>
<body>
    <div id="wrap">
        <header>
            <?php include("header.php"); ?>
        </header>

        <section id="imgSlider">
            <div class="swiper pcSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail9.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail3.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail4.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail5.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail7.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail8.jpg" alt=""></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper mobSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail_mob_1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail_mob_2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail_mob_3.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail_mob_4.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail_mob_5.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail_mob_6.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail_mob_7.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./img/main/main_thumbnail_mob_8.jpg" alt=""></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        
        <section id="mainContents">
            <article id="News">
                <div class = "titleSeciton">
                    <h2 class="articleTitle">새롭게 알려 드립니다 <span>News & Update</span></h2>
                    <a href="" class="moreButton">+</a>
                </div>
                <ul id="newsWrap">
                    <?php
                        $con = mysqli_connect("localhost", "user1", "12345", "test");
                        $sql = "select * from newsboard order by num desc";
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
                            
                            if($i < $total_record + 4)
                            {

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
                            else
                            {
                    ?>
                    <li class="oldNews">
                        <div class="newsImg" onclick="location.href=''"><img src="<?=$imageurl?>" alt=""></div>
                        <h5 class="newsCategory"><?=$category?></h5>
                        <p class="newsTitle"><?=$title?></p>
                        <p class="newsDate"><?=$date?></p>
                        <p class="newsSoftware">Nintendo Switch</p>
                    </li>
                    <?php
                            }
                        }
                    ?>
                </ul>
            </article>

            <article id="purchaseLink">
                <div id="purchaseCard" onclick="location.href=''">
                    <h3>Nintendo Swtich</h3>
                    <h2>닌텐도 선불 번호 구입 ▷</h2>
                </div>
            </article>

            <article id="gameSoftwares">
                <div class = "titleSeciton">
                    <h2 class="articleTitle">주요 소프트웨어 <span>Game Title</span></h2>
                </div>
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
                    ?>
                    <li class="newNews">
                        <div class="newsImg" onclick="ltiocaon.href=''"><img src="<?=$imageurl?>" alt=""></div>
                        <h5 class="newsCategory"><?=$category?></h5>
                        <p class="newsTitle"><?=$title?></p>
                        <p class="newsDate"><?=$date?></p>
                        <p class="newsSoftware">한국닌텐도</p>
                    </li>
                    <?php
                        }
                        mysqli_close($con);
                    ?>
                </ul>
                <section id="imgSlider">
                    <div class="swiper softwareSwiper">
                        <div class="swiper-wrapper">
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
                            $imageurl        = $row["imageurl"];
                        ?>
                            <div class="swiper-slide"><img src="<?=$imageurl?>" alt=""></div>
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                </section>
            </article>

            <article id="infoCards">
                <ul id="infoWrap">
                    <li>
                        <div class="cardText" onclick="location.href=''">
                            <h3>초보자들을 위한 모여봐요 동물의 숲 책자</h3></div>
                        <div class="cardImg">
                            <img src="./img/main/infoCard1.png" alt="">
                        </div></li>
                    <li><div class="cardText" onclick="location.href=''">
                        <h3>즐거움을 나눌 수 있는 소프트웨어</h3></div>
                        <div class="cardImg">
                            <img src="./img/main/infoCard2.png" alt="">
                        </div></li>
                    <li><div class="cardText" onclick="location.href=''">
                        <h3>별의 커비 공식 홈페이지</h3></div>
                        <div class="cardImg">
                            <img src="./img/main/infoCard3.png" alt="">
                        </div></li>
                    <li><div class="cardText" onclick="location.href=''">
                        <h3>처음 만나는 Nintendo Switch</h3></div>
                        <div class="cardImg">
                            <img src="./img/main/infoCard4.png" alt="">
                        </div></li>
                    <li><div class="cardText" onclick="location.href=''">
                        <h3>Nintendo Switch OLED 모델 공개 영상</h3></div>
                        <div class="cardImg">
                            <img src="./img/main/infoCard5.png" alt="">
                        </div></li>
                    <li><div class="cardText" onclick="location.href=''">
                        <h3>2022년 봄 Nintendo Switch 라인업 책자</h3></div>
                        <div class="cardImg">
                            <img src="./img/main/infoCard6.png" alt="">
                        </div></li>
                </ul>
            </article>
                
            <article id="moreInfos">
                <h2>쉽고 간편한 다운로드 버전으로도 즐길 수 있습니다.</h2>
                <ul>
                    <li>
                        <div class="moreWrap" onclick="location.href=''">
                            <div class="moreIcon"><img src="./img/main/icon_shop.png" alt=""></div>
                            <div class="moreText">다운로드 구입하기 ></div>
                        </div>
                    </li>
                    <li>
                        <div class="moreWrap" onclick="location.href=''">
                            <div class="moreIcon"><img src="./img/main/icon_card.png" alt=""></div>
                            <div class="moreText"> Nintendo Switch / 닌텐도 3DS<br>닌텐도 선불 카드 안내 ></div>
                        </div>
                    </li>
                    <li>
                        <div class="moreWrap" onclick="location.href=''">
                            <div class="moreIcon"><img src="./img/main/icon_game.png" alt=""></div>
                            <div class="moreText">Nintendo Switch<br>닌텐도 선불 번호 구입하기 ></div>
                        </div>
                    </li>
                </ul>
            </article>
        </section>
        
        <footer id="foot">
            <?php include("footer.php"); ?>
        </footer>
    </div>


    <!--Image Swiper-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".pcSwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swiper2 = new Swiper(".mobSwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var swiper2 = new Swiper(".softwareSwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    </script>
</body>
</html>
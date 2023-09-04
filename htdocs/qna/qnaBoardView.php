<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=false, maximum-scale=2.0">
    <title>Nintendo</title>
    <link rel = "icon" href = "../img/main/PageLogo.png" type = "image/x-icon">
    <link rel='stylesheet' href='../css/common.css?v=7'>

<style>

    #qnaArticle{
        width: 900px;

        margin: 0 auto;
        margin-top: 60px;
        margin-bottom: 120px;

        border-top: 4px solid #aaa;
    }
    #viewContent{
        border-bottom: 4px solid #e60012;
        margin-bottom: 50px;
    }

    #registerText{
        padding: 25px 0;
        font-size: 20px;
        color: #e60012;
    }
    #registerText span{
        font-size: 13px;
        float: right;
    }

    #titleText{
        font-size: 30px;
    }
    #writerText{
        text-align: right;
    }

    #contentSection{
        border: 2px solid #ddd;
        margin: 30px 0;
    }
    #contentText{
        padding: 25px 0;
    }


    #editBtns{
        text-align: right;
        margin: 10px 0;
    }
    #editBtns button{
        width: 80px;
        height: 30px;
        background-color: white;
        color: #444;
        border: 1px solid #aaa;
        border-radius: 3px;
    }

    #postBtns div{
        display: inline-block;
    }
    #postBtns div img{
        width: 100%;
    }

    #listBtn{
        float: right;
    }




    #movePostBtns div:hover, #listBtn:hover, #editBtns button:hover{
        cursor:pointer;
    }
        
    /* 타블렛과 휴대폰 공통 */
    @media (max-width:1024px){
    }

    /* 타블렛 only */
    @media (max-width:1024px) and (min-width:768px)
    {
        #qnaArticle{
            width: 75%;
        }
    } 

    /* 휴대폰 only*/
    @media (max-width:768px)
    {
        #qnaArticle{
            width: 90%;
        }
        #postBtns div div, #listBtn{
            width: 50px;
        }
    }
    
</style>
</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="mainContents">
            <article id="qnaArticle">
                <?php
                    $num  = $_GET["num"];
                    $page  = $_GET["page"];
                    $number = $_GET["number"];

                    $con = mysqli_connect("localhost", "user1", "12345", "test");
                    $sql = "select * from qnaboard where num=$num";
                    $result = mysqli_query($con, $sql);
                    $total_record = mysqli_num_rows($result);

                    $row = mysqli_fetch_array($result);

                    $category      = $row["category"];
                    $title       = $row["title"];
                    $content       = $row["content"];
                    $writer       = $row["writer"];
                    $registerday       = $row["registerday"];


                    $content = str_replace(" ", "&nbsp;", $content);
                    $content = str_replace("\n", "<br>", $content);
 
                    mysqli_query($con, $sql);
                ?>	
                
                <ul id="viewContent">
                    <li id="infoSection">
                        <h5 id="registerText"><?=$registerday?><span id="categorytText"><?=$category?></span></h5>
                    </li>
                    <li id="titleSection">
                        <h4 id="titleText"><b><?=$title?></b></h4>
                        <h5 id="writerText"><span><?=$writer?></span> 작성</h5>
                    </li>
                    <li id="contentSection">
                        <p id="contentText">
                            <?=$content?>
                        </p>
                    </li>
                </ul>

                <?php
                    if(isset($_SESSION["username"]))
                    {
                        if($writer == $_SESSION["username"])
                        { ?>
                            <div id="editBtns">
                                <button onclick="location.href='qnaModifyForm.php?num=<?=$num?>'">수정하기</button>
                                <button onclick="location.href='qnaDelete.php?num=<?=$num?>'">삭제하기</button>
                            </div>
                <?php  
                        }
                    }?>

                <div id="postBtns">
                    <div id="movePostBtns">
                        <div onclick="location.href='qnaBoardView.php?num=<?=$num?>&page=<?=$page?>&number=<?=$number?>'"><img src="/img/board/prevBtn.png" alt=""></div>
                        <div onclick="location.href='qnaBoardView.php?num=<?=$num?>&page=<?=$page?>&number=<?=$number?>'"><img src="/img/board/nextBtn.png" alt=""></div>
                    </div>
                    <div id="listBtn" onclick="location.href='qnaBoardListForm.php'">
                        <img src="/img/board/listBtn.png" alt="">
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
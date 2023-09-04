<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=false, maximum-scale=2.0">
    <title>Nintendo</title>
    <link rel = "icon" href = "../img/main/PageLogo.png" type = "image/x-icon">
    <link rel='stylesheet' href='../css/common.css?v=7'>
    <link rel='stylesheet' href='../css/qnalist.css'>
</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="mainContents">
            <section id="subpageTopper">
                <h2 id="subpageTitle">Nintendo Q&A</h2>
            </section>

            <article>
                <form id="searchForm" action="" method="get">
                    <select name="QnasearchWord" id="qnaSearchSelect">
                        <option value="">카테고리 전체</option>
                        <option value="">Nintendo Switch</option>
                        <option value="">닌텐도 어카운트</option>
                        <option value="">기타</option>
                    </select>
                    <input type="text" name="keyword" id="qnaSearchZone" placeholder="키워드를 입력해주세요">
                    <input type="submit" value="검 색" id="qnaSearchBtn">
                </form>
            </article>

            <table id="qnaTable">
                <?php
                    if (isset($_GET["page"]))
                        $page = $_GET["page"];
                    else
                        $page = 1;

                    $con = mysqli_connect("localhost", "user1", "12345", "test");
                    $sql = "select * from qnaboard order by num desc";
                    $result = mysqli_query($con, $sql);
                    $total_record = mysqli_num_rows($result); // 전체 글 수

                    $scale = 10;

                    // 전체 페이지 수($total_page) 계산 
                    if ($total_record % $scale == 0)     
                        $total_page = floor($total_record/$scale);      
                    else
                        $total_page = floor($total_record/$scale) + 1; 
                
                    // 표시할 페이지($page)에 따라 $start 계산  
                    $start = ($page - 1) * $scale;      

                    $number = $total_record - $start;
                    ?>
                <tbody>
                    <tr id="searchResultNum"><td colspan="3">총 <span><?=$total_record?></span> 개의 Q&A가 검색되었습니다.</td></tr>
                    
                    <?php
                    for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
                    {
                        mysqli_data_seek($result, $i);
                        // 가져올 레코드로 위치(포인터) 이동
                        $row = mysqli_fetch_array($result);
                        // 하나의 레코드 가져오기
                        $num         = $row["num"];
                        $category          = $row["category"];
                        $title        = $row["title"];
                        $writer     = $row["writer"];
                    ?>

                    <tr class="boardLine">
                        <td><div><p>Q</p></div></td>
                        <td><?=$category?></td>
                        <td><a href="qnaBoardView.php?num=<?=$num?>&page=<?=$page?>&number=<?=$number?>"><?=$title?></a></td>
                    </tr>

                    <?php
                        $number--;
                        }
                        mysqli_close($con);

                    ?>
                </tbody>
            </table>

            <ul class="boardButtons">
                <?php
                    $isLogin = isset($_SESSION["username"]);
                ?>
                <li>
                    <button onclick="location.href='qnaBordInsertForm.php'" id="askBtn">질문하기</button>
                </li>
            </ul>

            <ul id="pagePasser"> 	
                <?php
                    if ($total_page>=2 && $page >= 2)	
                    {
                        $new_page = $page-1;
                        echo "<li><a href='qnaBoardListForm.php?page=$new_page'> < </a></li>";
                    }		
                    else 
                        echo "<li>　</a> </li>";

                    // 게시판 목록 하단에 페이지 링크 번호 출력
                    for ($i=1; $i<=$total_page; $i++)
                    {
                        if ($page == $i)     // 현재 페이지 번호 링크 안함
                        {
                            echo "<li style='color: #e60012'><b>$i</b></li>";
                        }
                        else if ($page != $i)
                        {
                            echo "<li><a href='qnaBoardListForm.php?page=$i'>$i</a></li>";
                        }
                    }
                    
                    if ($total_page>=2 && $page != $total_page)		
                    {
                        $new_page = $page+1;	
                        echo "<li> <a href='qnaBoardListForm.php?page=$new_page'> > </a> </li>";
                    }
                    else 
                            echo "<li>　</li>";
                ?>
            </ul> <!-- page -->	  

            <div id="nintendoTerms">
                <div onclick="location.href=''"><span>></span>Nintendo 이용 약관</div>
                <div onclick="location.href=''"><span>></span>안전을 위한 주의사항(PDF)</div>
            </div>
        </section>
        
        <footer id="foot">
            <?php include("../footer.php"); ?>
        </footer>
    </div>
</body>
</html>
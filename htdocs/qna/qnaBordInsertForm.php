<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=false, maximum-scale=2.0">
    <title>Nintendo</title>
    <link rel = "icon" href = "../img/main/PageLogo.png" type = "image/x-icon">
    <link rel='stylesheet' href='../css/common.css?v=7'>
    <link rel='stylesheet' href='../css/qnainsert.css'>

<script>
function check_input() {
    if (!document.board_form.title.value)
    {
        alert("제목을 입력하세요!");
        document.board_form.title.focus();
        return;
    }
    if (!document.board_form.content.value)
    {
        alert("내용을 입력하세요!");    
        document.board_form.content.focus();
        return;
    }
    document.board_form.submit();
}
</script>

</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="mainContents">
            <section id="subpageTopper">
                <h2 id="subpageTitle">질문하기</h2>
            </section>
            <article>
                <form name="board_form" id="insertForm" method="post" action="qnaBoardInsert.php" enctype="multipart/form-data">
                    <table id="insertTable">
                        <tr><td id="categoryLabel">카테고리</td>
                            <td>
                                <select name="postSelect" id="categoryInput">
                                    <option value="">카테고리 선택</option>
                                    <option value="Nintendo Switch">Nintendo Switch</option>
                                    <option value="닌텐도 어카운트">닌텐도 어카운트</option>
                                    <option value="기타">기타</option>
                                </select>
                            </td></tr>
                        <tr><td id="titleLabel">제목</td>
                            <td><input name="title" type="text" id="titleInput" required></td></tr>
                        <tr><td id="contentLabel">내용</td>
                            <td><textarea name="content" id="contentInput" cols="100" rows="20" required></textarea></td>
                        </tr>
                    </table>

                    <ul class="buttons">
                        <li><button type="button" id="submitBtn" onclick="check_input()">등 록</button></li>
                    </ul>
                </form>
            </article>
        </section>
        
        <footer id="foot">
            <?php include("../footer.php"); ?>
        </footer>
    </div>
</body>
</html>
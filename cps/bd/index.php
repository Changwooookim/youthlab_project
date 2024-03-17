<?php
include $_SERVER['DOCUMENT_ROOT'] . "/db.php";
?>
<!doctype html>

<head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="icon" href="/css/ball.png" />
  <link rel="apple-touch-icon" href="/css/ball.png" />
</head>

<body>
  <div id="board_area">
    <a href="/" class="modern-button">
      < 메인페이지로 돌아가기</a>
        <h1>Football Mania 자유게시판</h1>
        <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
        <table class="list-table">
          <thead>
            <tr>
              <th width="70">번호</th>
              <th width="500">제목</th>
              <th width="120">글쓴이</th>
              <th width="100">작성일</th>
              <th width="100">조회수</th>
            </tr>
          </thead>
          <?php
          $sql = mq("select * from board order by idx desc limit 0,10"); // board 테이블에 있는 idx를 기준으로 내림차순해서 5개까지 표시
          while ($board = $sql->fetch_array()) {
            $title = $board["title"];
            if (strlen($title) > 30) {
              $title = str_replace($board["title"], mb_substr($board["title"], 0, 30, "utf-8") . "...", $board["title"]); //title이 30글자를 넘어서면 ...표시
            }
          ?>
            <tbody>
              <tr>
                <td width="70"><?php echo $board['idx']; ?></td>
                <td width="500"><a href="/page/board/read.php?idx=<?php echo $board["idx"]; ?>"><?php echo $title; ?></a></td>
                <td width="120"><?php echo $board['name'] ?></td>
                <td width="100"><?php echo $board['date'] ?></td>
                <td width="100"><?php echo $board['hit']; ?></td>
              </tr>
            </tbody>
          <?php } ?>
        </table>
        <div id="write_btn">
          <a href="/page/board/write.php"><button>글쓰기</button></a>
        </div>
  </div>
</body>

</html>
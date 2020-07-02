<?
  include 'topnav.html';
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="club_form.css" type="text/css">
<link rel="stylesheet" href="ui.css" type="text/css">
 <link href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="board_area">
  <br><br><br><font style="font-size: 40px"><b>동아리 게시판</b></font>
  <div id="write_btn">
    <a href="#"><button id ="btn_write"><font style="font-size: 20px">글쓰기</font></button></a>
  </div>
    <table class="list-table">
      <thead>
          <tr>
              <th width="80">번호</th>
                <th width="500">제목</th>
                <th width="130">글쓴이</th>
                <th width="110">작성일</th>
            </tr>
        </thead>
        <!-- <?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = mq("select * from board order by idx desc limit 0,5");
            while($board = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["title"];
              if(strlen($title)>30)
              {
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['idx']; ?></td>
          <td width="500"><a href=""><?php echo $title;?></a></td>
          <td width="120"><?php echo $board['name']?></td>
          <td width="100"><?php echo $board['date']?></td>
          <td width="100"><?php echo $board['hit']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table> -->

  </div>
</body>
</html>


<script>
function googleTranslateElementInit() {
      new google.translate.TranslateElement(
          {
              //gaTrack: true,  // Google 애널리틱스
              //gaId: 'UA-*******', // Google 애널리틱스 웹 속성 ID
              pageLanguage: 'ko',
              includedLanguages: 'de,en,ja,ko,zh-CN',
              layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
              autoDisplay: false, multilanguagePage: true
            },
            'google_translate_element'
            );
          }
</script>

<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

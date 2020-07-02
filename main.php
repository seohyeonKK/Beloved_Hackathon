
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> 메인 화면 </title>
    <link rel="stylesheet" href="ui.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
    <!-- 여기 넣은 건 별 의미없는데, sidebar 글씨가 뭉게지길래 밑으로 내림 -->
    <?php
      include 'topnav.html';
     ?>
  </head>

  <body>
    <center>
      <br><br><br><br>
      <h1 id="page_title"> 세종대학교 외국인 학우들 모여라~ </h1>
      <br>
      <table>
        <tr>
        <input type='button' value='로그인' id="btn_mainpage_signin" onClick="location.href='signin.php'";></td>
      </tr><br><br>
        <tr>
          <input type='button' value='회원가입' id="btn_mainpage_signup" onClick="location.href='signup.php'";></td>
        </tr>
      </table>

      <br>
      <input type="button" value="언어 선택" id="btn_mainpage_chooseLang" onclick="location.href='chooseLanguage.php'";>
      <br><br>

    </center>
  </body>
</html>

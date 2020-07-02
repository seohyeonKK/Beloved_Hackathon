<?
  include 'topnav.html';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="ui.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
  </head>
  <body>
    <br><br><br><br>
    <center><h1> <span style="font-size: 35pt;"><span style="font-family: 'Nanum Brush Script',cursive;">친구 찾기</span></h1><br><br>
      <input type='button' value='한국인 친구 찾기' id="btn_mainpage_signin" onClick="location.href='findKoreanFriend.php'";><br><br>
      <input type='button' value='외국인 친구 찾기' id="btn_mainpage_signup" onClick="location.href='findForeignFriend.php'";><br><br>
      <input type='button' value='신청하기' id="btn_mainpage_chooseLang" onClick="location.href='question.php'";><br>

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

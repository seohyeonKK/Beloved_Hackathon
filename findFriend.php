<?
  include 'topnav.html';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="ui.css" type="text/css">
     <link href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold" rel="stylesheet" type="text/css" />

  </head>
  <body>
    <br><br>
    <center><h1> <span style="font-size: 30pt;"><span style="font-family: 'Comic Sans MS Bold', arial;', arial,cursive;',cursive;">친구 찾기</span></h1><br><br>
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

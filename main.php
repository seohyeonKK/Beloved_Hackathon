
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> 메인 화면 </title>
    <link rel="stylesheet" href="ui.css" type="text/css">
     <link href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold" rel="stylesheet" type="text/css" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> -->

    <!-- 여기 넣은 건 별 의미없는데, sidebar 글씨가 뭉게지길래 밑으로 내림 -->
    <?php
      include 'topnav.html';
     ?>
  </head>

  <body>
    <center>

      <br><br><br><br>
      <img src="img/logo.png" width="304" height="113">
      <br><br><br>
      <table>
        <tr>
        <input type='button' value='로그인' id="btn_mainpage_signin" onClick="location.href='signin.php'";></td>
      </tr><br><br>
        <tr>
          <input type='button' value='회원가입' id="btn_mainpage_signup" onClick="location.href='signup.php'";></td>
        </tr><br>
      </table>
    </center>
  </body>
</html>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style>
iframe.goog-te-banner-frame { display: none !important; }
body { position: static !important; top:0px !important; }
.goog-logo-link { display:none !important; }
.goog-te-gadget { color: transparent !important; }
</style>
<script>
window.onload = function() {
  var l_from_domain = $("#from_domain").val();
  if(l_from_domain=="cn"){
    document.cookie="googtrans=/en/zh-CN";
  }
}

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

<script>
$(window).load(function () {

    $('.translation-icons').css('visibility', 'visible');

        $('.translation-icons a').click(function(e) {
            e.preventDefault();
            var placement = $(this).data('placement');
            var lang_num = $('.translation-icons a').length;
            var $frame = $('.goog-te-menu-frame:first');

            if (!$frame.size()) {
                alert("Error: Could not find Google translate frame.");
                return false;
              }

              var langs = $('.goog-te-menu-frame:first').contents().find('a span.text');

              if(langs.length != lang_num) placement = placement+1;

              langs.eq(placement).click();
              return false;
            });
          });

</script>
<div id="google_translate_element" style="visibility: hidden; position: absolute; top: 0px;"></div>
<div class="translation-icons" style="visibility: hidden; position: relative; margin:0 auto; padding-right: 15px; zoom:1">
<br><br><br><br><br>
<img src="img/google_translate_logo.png" alt='구글 번역 api'/>
 <a href="#" class="ko" data-placement="0"> <img src="img/KR.png" alt='한국'/></a>
 <a href="#" class="gm" data-placement="1"> <img src="img/GM.png" alt='독일'/></a>
 <a href="#" class="us" data-placement="2"> <img src="img/US.png" alt='미국'/></a>
 <a href="#" class="jp" data-placement="3"> <img src="img/JP.png" alt='일본'/></a>
 <a href="#" class="cn" data-placement="4"> <img src="img/CN.png" alt='중국'/></a>
</div>

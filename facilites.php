<?
include 'topnav.html';
?>
<link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
<center>
<br>
<h1> <span style="font-size: 35pt;"><span style="font-family: 'Nanum Brush Script',cursive;">학교 근처 편의시설</span></h1>
<br><br><br>
<?
  include 'map.html';
?>
<style>
#info {
  position: absolute;
  top: 160px;
  right: 16px;
  height: 40%;
  width: 50%;
}
</style>


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

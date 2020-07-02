<?
  include 'topnav.html';
?>
<link rel="stylesheet" href="ui.css" type="text/css">
 <link href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold" rel="stylesheet" type="text/css" />
<center>
<br><br><body>
<font style="font-size:30px"><b>교수님 소개</b></font>
<br><br>
<select id="depart">
  <option selected disabled value="0">학과선택</option>
  <option value="컴퓨터공학과">컴퓨터공학과</option>
  <option value="소프트웨어학과">소프트웨어학과</option>
  <option value="데이터사이언스학과">데이터사이언스학과</option>
  <option value="선택안함">선택안함</option>
</select>

<button onclick="find()">설정</button>

<center>
  <p id="result"></p>
  <script src="//code.jquery.com/jquery.min.js"></script>
  <script>

      function find() {
        $.ajax({
            url: "profess_info.php",
            type: "get",
            dataType: "html",
            data: {
                select_depart: $('#depart').val(),
            }
        }).done(function(data) {
            $('#result').html(data);
        });
      }


  </script>
</body>



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

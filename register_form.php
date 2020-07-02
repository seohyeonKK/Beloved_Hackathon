<?
 session_start();
 include 'topnav.html';
?>
<html>
 </head>
 <link rel="stylesheet" href="ui.css" type="text/css">
 <link href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold" rel="stylesheet" type="text/css" />
 <body topmargin=0 leftmargin=0 text="#464646">
 <center>

 <br><br><br><br><br><br>
 <form action="register.php" method=post >
 <table width=580 border=2 cellpadding=1 cellspacing=1 bgcolor="#777777" align=center >
  <tr>
  <td height=20 align=center bgcolor="#999999">
  <font color=white style="font-size:20px"><B>신청서</B></font></td>
  </tr>
  <tr>
  <td bgcolor=white>&nbsp;
  <table>
  <tr>
   &nbsp;<td width=160 align=center style="font-size:15px">이름</td>
   <td align=center><input type=text name="register_name" size=20 maxlength=10>
   </td>
  </tr>
  <tr>
   &nbsp;<td width=160 align=center style="font-size:15px">이메일</td>
   <td align=center><input type=test name="register_email" maxlength=25>
   </td>
  </tr>
  <tr>
    <td width=160 align=center style="font-size:15px">카테고리
      <td align=center><select name="friend_category" >
       <option value="0">밥</option>
       <option value="1">운동</option>
       <option value="2">공부</option>
       <option value="3">여행</option>
       <option value="4">수다</option>
       <option value="5">게임</option>
       <option value="6">기타</option>
     </select></td>

  </tr>
  <tr>
   <td width=160 align=center style="font-size:15px">희망 언어
     <td align=center><select name="friend_language" >
      <option value="0">영어</option>
      <option value="1">중국어</option>
      <option value="2">일본어</option>
      <option value="3">불어</option>
    </select></td>

  </tr>
  <tr>
  <td width=160 align=center style="font-size:15px">성별
     <td align=center><select name="friend_sex" >
      <option value="0">남</option>
      <option value="1">여</option>
     </select></td></td>
  </tr>

  <tr align=center>
    <td colspan=10 align=center>
    <br><br><br><center>
    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
  <input type=submit id="btn_salmon_small" value="신청하기">
   &nbsp;&nbsp;
   <input type=reset id="btn_lightblue_small" value="다시 작성하기">
   &nbsp;&nbsp;  </center>
  </td>
  </tr>
  </table>
  </form>

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

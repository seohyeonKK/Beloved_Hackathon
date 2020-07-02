<?
 session_start();
 include 'topnav.html';
?>
<html>
 </head>
 <link rel="stylesheet" href="ui.css" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
 <body topmargin=0 leftmargin=0 text="#464646">
 <center>

 <br><br><br><br><br><br>
 <form action="register.php" method=post >
 <table width=580 border=2 cellpadding=1 cellspacing=1 bgcolor="#777777" align=center >
  <tr>
  <td height=20 align=center bgcolor="#999999">
  <font color=white style="font-size:30px"><B>신청서</B></font></td>
  </tr>
  <tr>
  <td bgcolor=white>&nbsp;
  <table>
  <tr>
   &nbsp;<td width=160 align=center style="font-size:25px">이름</td>
   <td align=center><input type=text name="name" size=20 maxlength=10>
   </td>
  </tr>
  <tr>
   &nbsp;<td width=160 align=center style="font-size:25px">이메일</td>
   <td align=center><input type=test name="email" maxlength=25>
   </td>
  </tr>
  <tr>
    <td width=160 align=center style="font-size:25px">카테고리
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
   <td width=160 align=center style="font-size:25px">희망 언어
     <td align=center><select name="friend_language" >
      <option value="0">영어</option>
      <option value="1">중국어</option>
      <option value="2">일본어</option>
      <option value="3">불어</option>
    </select></td>

  </tr>
  <tr>
  <td width=160 align=center style="font-size:25px">성별
     <td align=center><select name="friend_sex" >
      <option value="0">남</option>
      <option value="1">여</option>
     </select></td></td>
  </tr>

  <tr>
    <td colspan=10 align=center>
    <br><br><br><center>
    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
  <input type=submit id="btn_salmon_small" value="신청하기">
   &nbsp;&nbsp;
   <input type=reset id="btn_lightblue_small" value="다시 작성하기">
   &nbsp;&nbsp;
   <input type=button value="뒤로가기" id="btn_black_small" onclick="location.href ='findFriend.php'">
  </td>
  </tr>
  </table>
  </form>
  </center>
 </body>
</html>

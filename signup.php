<?
  include 'topnav.html'
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="ui.css" type="text/css">
  <link href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold" rel="stylesheet" type="text/css" />
  <script>
  function check(){
    var password = document.getElementById("password").value;
    var passwordCheck = document.getElementById("password_Check").value;
    var regExp = /[\{\}\[\]\/?.,;:|\)*~`!^\-+<>@\#$%&\\\=\(\'\"]/gi;

    if(document.join_form.user_id.value.trim() == ""){
      alert("아이디를 입력하세요.");
      document.join_form.user_id.focus();
      return;
    }
    else if(document.join_form.user_name.value.trim() == ""){
      alert("이름을 입력하세요.");
      document.join_form.user_name.focus();
      return;
    }
    else if(document.join_form.user_password.value.trim() == ""){
      alert("비밀번호를 입력하세요.");
      document.join_form.user_password.focus();
      return;
    }
    else if(document.join_form.repw.value.trim() == ""){
      //확인 비밀번호를 입력하지 않았을 경우 알려줍니다.
      alert("비밀번호를 확인하세요.");
      document.join_form.user_password.focus();
      return;
    }
    // 입력받은 아이디,이름에 특수문자가 없는지 확인합니다.
    else if(regExp.test(document.join_form.user_id.value)){
      alert("아이디를 입력할 때는 특수문자를 제외해주세요.");
      document.join_form.user_id.focus();
      return;
    }
    else if(regExp.test(document.join_form.user_name.value)){
      alert("이름을 입력할 때는 특수문자를 제외해주세요.");
      document.join_form.user_name.focus();
      return;
    }
    // 입력한 비밀번호와 비밀번호 확인을 위해 한 번 더 입력한 비밀번호가 맞는지 확인합니다.
    else if(password != passwordCheck){
      alert("비밀번호가 같지 않습니다.");
      document.join_form.repw.focus();
      return;
    }
    // 아이디,비밀번호,이름을 모두 조건에 따라 잘 입력한 경우, join_form의 데이터가 join.php파일에 전달되어
    // join.php파일에서 해당 db의 member_info 테이블에 입력받은 data(id,password,name)를 추가해줍니다.
    document.join_form.submit();
  }
  function id_Check(){ //특수문자 입력을 제한하고, 해당 아이디의 중복 여부를 확인합니다.
    var userid = document.all.user_id.value;
    var regExp = /[\{\}\[\]\/?.,;:|\)*~`!^\-+<>@\#$%&\\\=\(\'\"]/gi;
    if(regExp.test(document.join_form.user_id.value)){
      alert("아이디를 입력할 때는 특수문자를 제외해주세요.");
      document.join_form.user_id.focus();
      return;
    }
    // 입력받은 아이디의 값이 중복인지 체크하기 위해 get방식으로 넘겨줍니다.
    // 이 때, 아이디는 비밀번호와 같이 비밀스러운 값은 아니므로 get방식을 사용합니다.
    url = "checkid.php?user_id="+userid;
    window.open(url, "chkid", "width=400, height=200, menubar=no, toolbar=no");
  }
  function pw_Check(){// 비밀번호와 비밀번호 확인 입력 시, 같은 비밀번호로 입력했는지 확인합니다.
    var password = document.getElementById("password").value;
    var passwordCheck = document.getElementById("password_Check").value;
    if(passwordCheck == ""){
      document.getElementById("pwchecktext").innerHTML = "";
    }
    else if(password != passwordCheck){ //다르게 입력될 경우 빨간 엑스를 표시합니다.
      document.getElementById("pwchecktext").innerHTML = "<b>&nbsp;&nbsp;&nbsp;✘</b>";
      document.getElementById("pwchecktext").style.color = 'red';
    }
    else{ // 비밀번호 두 개가 같게 입력될 경우 초록색 체크를 표시합니다.
      document.getElementById("pwchecktext").innerHTML = "<b>&nbsp;&nbsp;&nbsp;✔</b>";
      document.getElementById("pwchecktext").style.color = 'green';
    }
  }
</script>
</head>
<body>
  <br>
  <div id="loginer">
    <div id="form">
      <fieldset>
        <legend id="page_title">&nbsp;회원 가입&nbsp;</legend>
          <!--
          회원가입시 입력받은 아이디,이름,비밀번호의 정보를 조건에따라 잘 입력받은 경우
          db의 member_info에 저장해주는 join.php파일에 POST방식으로 전달합니다.
          비밀번호와 같은 정보를 보호해야 하므로 POST 방식으로 전달합니다.
          -->
          <form name = "join_form" action = "./join.php" method = "POST">
            <table align="center" width="500" height = "300">
              <tr align="center">
                <td> 아이디 </td>
                <td> <input type="text" name="user_id" id="id" maxlength="15"></td>
                <td><input type="button" id="btn_check" name="checkid" value="중복확인" onclick="id_Check()" ><br></td>
              </tr>
              <tr align="center">
                <td> 이름</td>
                <td> <input type="text" name="user_name" id="name" maxlength="7" ><br></td>
              </tr>
              <tr align="center">
                <td>비밀번호</td>
                <td><input type="password" name="user_password" id="password" maxlength="15"><br></td>
              </tr>
              <tr align="center">
                <td>비밀번호 확인</td>
                <td><input type="password" name="repw" id="password_Check" onkeyup="pw_Check()" maxlength="15"></td>
                <td align="left" rowspan="1" id="pwchecktext"></td>
              </tr>
              <tr>
                <td>이메일</td>
                <td width: "400px"><input type="text" name="user_email">@<select name="emadress">
                <option value="naver.com">naver.com</option>
                <option value="nate.com">nate.com</option>
                <option value="gmail.com">gmail.com</option>
                <option value="sejong.ac.kr">sejong.ac.kr</option>
                <option value="hanmail.com">hanmail.com</option></select></td>
              </tr>

              <tr align="center">
                <td colspan="3" align=center><br><input type="button" id="btn_salmon_small" value="회원가입" onclick="check()"></td>
              </tr>
              <tr>
                <td colspan="3" align-center><br><input type="button" id="btn_lightblue_small" value="홈으로" name="back" onclick="location.href='main.php'"></td>
              </tr>
              <br>
            </table>
          </form>
        </fieldset>
      </div>
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

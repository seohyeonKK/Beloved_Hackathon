<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- 글씨체 설정을 위한 외부 스타일 시트 연결합니다. -->
  <link rel="stylesheet" href="ui.css" type="text/css">
  <!-- 연결할 글씨체 리소스의 url입니다. -->
<link href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold" rel="stylesheet" type="text/css" />

  <?
      include 'topnav.html';
  ?>
  <title>Judgement</title>

  <script>

    // '로그인'버튼 누르면 실행되는 함수입니다.
    // 로그인을 위해 아이디와 비밀번호 입력여부를 검사합니다.
    function checkInputForm(){

      if(!document.login_input_form.user_id.value){// Id 값을 입력받았는지 확인합니다.
        alert('아이디를 입력하세요.');
        document.login_input_form.user_id.focus();
        return;
      }

      if(!document.login_input_form.user_password.value){// Password 값을 입력받았는지 확인합니다.
        alert('비밀번호를 입력하세요.');
        document.login_input_form.user_password.focus();
        return;
      }
      document.login_input_form.submit();
    }
  </script>
</head>

<body>
  <br><br>
  <h1 id="project_title" align="center"> 로그인 </h1>

  <div id="loginer">
    <div id="form">

      <form name = "login_input_form" action = "login_check.php" method = "post">
        <fieldset>
          <legend> LOGIN ! </legend>
            <table align=center>
                <tr>
                  <td><label id="user_id_pwd_label"> 아이디</label></td>
                  <td><input type="text" name = "user_id" id ="user_text" placeholder="아이디를 입력해주세요."></td>
                  <td rowspan="2"><input type="submit" value="로그인" id="btn_login"> </td>
                </tr>
                <tr>
                  <td><label id="user_id_pwd_label"> 비밀번호  </label></td>
                  <td><input type="password" name ="user_password" id ="user_text" placeholder="비밀번호를 입력해주세요."></td>
                </tr>
            </table>
          <br>

          <input type="button" value="회원가입" id="btn_join_introduce" onclick="location.href='join_form.php'";>
          <br><br>
          <input type="button" value="페이지 안내서" id="btn_join_introduce" onclick="location.href='introduce.php'";>
          <br><br>
        </fieldset>
      </form>
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

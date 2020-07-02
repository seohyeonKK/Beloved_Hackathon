<?
  include 'topnav.html';
?>
<link rel="stylesheet" href="ui.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
<center>
<br><br><body>
<font style="font-size:45px"><b>교수님 소개</b></font>
<br><br><br>
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

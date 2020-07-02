<?
include './dbconn.php';
$select_depart = $_GET['select_depart'];

if($select_depart=="선택안함")
{
  $query = "SELECT * FROM professor_info";
}
else
{
  $query = "SELECT * FROM professor_info WHERE professor_major='$select_depart'";
}
$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);

//검색 결과가 없을 경우
if(!$num)
{
  echo "검색 결과가 없습니다. <br> 빠른 시일내에 업데이트 하겠습니다.";
}
else {
  echo "
  <center>
  <table id ='delete_table'>
     <tr>
        <th id = 'td_cheate' width =300>&nbsp;학과&nbsp;</th>
        <th id = 'td_cheate' width =300>&nbsp;성함&nbsp;</th>
        <th id = 'td_item' width =300>&nbsp;이메일&nbsp;</th>
     </tr>
  </table>
  ";

  while($row = mysqli_fetch_array($result))
  {
    $major = $row["professor_major"];
    $email = $row["professor_email"];
    $name = $row["professor_name"];

    echo "
    <table id ='delete_table'>
       <tr>
          <td id = 'td_cheate' width =300><center> $major </center></td>
          <td id = 'td_cheate' width =300><center> $name </center></td>
          <td id = 'td_item' width =300><center> $email </center></td>
       </tr>
    </table>
    </center>
    ";
  }
}




?>


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

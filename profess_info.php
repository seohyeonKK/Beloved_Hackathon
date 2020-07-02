<?

$select_depart = $_GET['select_depart'];

//사용자가 선택한 키워드를 통해 추천 맛집을 찾는 쿼리문
$query = ;
$result=mysqli_query($conn, $query);

//result의 개수를 num에 저장
$num = mysqli_num_rows($result);

//검색 결과가 없을 경우
if(!$num)
{
  echo "검색 결과가 없습니다. <br> 빠른 시일내에 업데이트 하겠습니다.";
}
else {
  echo "
      <table width='1000' border='1'>
      <tr>
      <td width='20%' align='center'>가게명</td>
      <td width='10%' align='center'>지역</td>
      <td width='10%' align='center'>종류</td>
      <td width='10%' align='center'>별점</td>
       </tr>
  ";

  while($row = mysqli_fetch_array($result))
  {
    echo("
    <tr>
    <td align = 'center'><a href='restaurant_detail_info.php?restaurant_id=".$row["restaurant_id"]."'>$row[restaurant_name]</td>
    <td align = 'center'>$row[gu]</td>
    <td align = 'center'>$row[restaurant_type]</td>
    <td align = 'center'>$row[star]</td>
    </tr>
    ");
  }
}




?>

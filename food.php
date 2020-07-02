<?
include 'sidebar.html';
?>
<link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
<center>
<br>
<h1> <span style="font-size: 35pt;"><span style="font-family: 'Nanum Brush Script',cursive;">학교 근처 맛집</span></h1>
<br>
<?
  include 'map.html';
?>
<style>
#info {
  position: absolute;
  top: 150px;
  right: 16px;
  height: 40%;
  width: 50%;
}
</style>
<fieldset id = "info">
      <legend><b>정보</b></legend>
      <font size=4>
      <b>이름:</b><br>
      <b>주소:</b><br>
      <b>종류:</b><br>
      <b>별점:</b><br>
      <b>리뷰:</b><br>
      </fieldset>

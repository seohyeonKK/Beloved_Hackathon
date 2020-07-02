<link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
<script src="https://code.jquery.com/jquery-latest.js"></script>

   <style>
       /* The Modal (background) */
       .modal {
           display: none; /* Hidden by default */
           position: fixed; /* Stay in place */
           z-index: 1; /* Sit on top */
           left: 0;
           top: 0;
           width: 100%; /* Full width */
           height: 100%; /* Full height */
           overflow: auto; /* Enable scroll if needed */
           background-color: rgb(0,0,0); /* Fallback color */
           background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
       }

       /* Modal Content/Box */
       .modal-content {

           background-color: #fefefe;
           margin: 15% auto; /* 15% from the top and centered */
           padding: 20px;
           border: 1px solid #888;
           width: 30%; /* Could be more or less, depending on screen size */

       }

</style>

   <!-- The Modal -->
   <div id="myModal" class="modal">
     <!-- Modal content -->
     <div class="modal-content">
               <p style="text-align: center;"><b><span style="font-size: 24pt;"><span style="font-family: 'Nanum Brush Script',cursive;">설문</span></b></span></p><br>
               <table><tr>
                 <font style="font-family: 'Nanum Brush Script',cursive;">
                 <td width=160 align=center style="font-size:25px"><font style="font-family: 'Nanum Brush Script',cursive;">카테고리
                   <td align=center><select name="my_category">
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
                <td width=160 align=center style="font-size:25px"><font style="font-family: 'Nanum Brush Script',cursive;">희망 언어
                  <td align=center><select name="my_language" >
                   <option value="0">영어</option>
                   <option value="1">중국어</option>
                   <option value="2">일본어</option>
                   <option value="3">불어</option>
                 </select></td>

               </tr>
               <tr> <font style="font-family: 'Nanum Brush Script',cursive;">
               <td width=160 align=center style="font-size:25px"><font style="font-family: 'Nanum Brush Script',cursive;">성별
                  <td align=center><select name="my_sex" >
                   <option value="0">남</option>
                   <option value="1">여</option>
                  </select></td></td>
               </tr>
              </table>
              <br><br>
           <div style="cursor:pointer;background-color:#DDDDDD;text-align: center;padding-bottom: 10px;padding-top: 10px;" onClick="close_pop();">

               <span class="pop_bt" style="font-size: 17pt;" style="font-family: 'Nanum Brush Script',cursive;">신청하기</span>
           </div>
     </div>
   </div>
       <!--End Modal-->

   <script type="text/javascript">
       jQuery(document).ready(function() {
               $('#myModal').show();
       });
       //팝업 Close 기능
       function close_pop(flag) {
            $('#myModal').hide();
              location.href= "./findFriend.php";
       };

     </script>


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

     

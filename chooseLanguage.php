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
               <p style="text-align: center;"><b><span style="font-size: 24pt;"><span style="font-family: 'Nanum Brush Script',cursive;">언어 선택</span></b></span></p><br>
               <center>
               <select id="language" name="main_language" >
                <option value="0">영어</option>
                <option value="1">중국어</option>
                <option value="2">일본어</option>
                <option value="3">아랍어</option>
                <option value="4">힌두어</option>
              </select></center><br><br>

           <div style="cursor:pointer;background-color:#DDDDDD;text-align: center;padding-bottom: 10px;padding-top: 10px;" onClick="close_pop();">
               <span class="pop_bt" style="font-size: 13pt;" style="font-family: 'Nanum Brush Script',cursive;">확인</span>
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
            location.href= "./main.php";
       };

     </script>

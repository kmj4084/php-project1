<?php
   include 'dbconn.php';

  $_SESSION['userid'] =$_POST['userId'];
  $_SESSION['userpw'] =$_POST['userPw'];

  
  

  $sqli ="SELECT id,pwd FROM account_info WHERE id='$_SESSION[userid]' and pwd = '$_SESSION[userpw]'";
  $num = mysqli_query($conn,$sqli);
 
  if ($num != '0'){
  echo ("<script>location.href='./board.php'</script>");
  }
  else{
    ?> 
     <script>
    alert('로그인 실패');
    </script>
    <?php
    echo ("<script>location.href='./login.php'</script>");
   
   
  }
  ?>


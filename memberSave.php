<?php

 include 'dbconn.php';

 $id=$_POST['id'];
 $password=($_POST['pwd']);
 $password2=$_POST['pwd2'];
 $name=$_POST['name'];
 $address=$_POST['addr'];
 $sex=$_POST['sex'];
 $birthDay=$_POST['birthDay'];
 $email=$_POST['email'];
 
 if($password!=$password2){
     echo"비밀번호와 비밀번호 확인이 다릅니다.";
     echo "<a href=signUp.php>되돌아가기</a>";
    exit();
 }
 if($id==NULL || $pw==NULL || $name ==NUll || $email==NULL){
    echo "빈칸을 모두 채워주세요.";
    echo "<a href=signUp.php>되돌아가기</a>";
    exit();
 }
 
  $sqli = "insert into account_info (id, pwd, name, addr, sex, birthDay, email)";
  $sqli = $sqli. "values('$id','$password','$name','$address','$sex','$birthDay','$email')";


$result = mysqli_query($conn,$sqli);
if($result){
    ?> 
    <script>
    alert('회원가입 완료');
    </script>
<?php
}

echo("<script>location.href='./login.php';</script>");
?>
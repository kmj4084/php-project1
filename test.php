<?php
 $host = 'localhost';
 $user = 'kmj';
 $pw = '1234';
 $dbName = 'myservice';
 $conn = new mysqli($host, $user, $pw, $dbName);
 $test='kmj';
 $userid = 'asd';
 $query ="SELECT * FROM account_info where id ='$test'";
 $result = mysqli_query($conn,$query);
  
 $row = mysqli_num_rows($result);

if($row!=0){
    echo "야호";
}else{
    echo "쉣";
}


 mysqli_close($conn);
  ?>
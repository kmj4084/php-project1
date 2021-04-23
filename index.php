<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Loaction: login.php');
}

echo"홈(로그인성공)";

echo"<a href=logout.php>로그아웃</a>";



?>
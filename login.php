<?php
session_start();
?>
<html>
<head>
<title>login page</title>
<meta charset="uft-8">
</head>
<body>
    <form method="post" action="./login_ok.php">
        <div>
            <label for="id">ID</label>
            <input type="text" name="userId">
        </div>
        <div>
            <label for="pw">PW</label>
            <input type="text" name="userPw">
        </div>

        <div class="button">
            <button type="submit">l로그인</button>
        </div>
    </form>
    <button onclick="location.href='signUp.php'">회원가입</button>
</body>
</html>
<doctype html>
<html>
<head>
<title>sign up page</title>
</head>
<body>
<form name="join" method="post" action="memberSave.php">
 <h1>회원가입</h1>
 <table border="1">
  <tr>
   <td>ID</td>
   <td><input type="text" size="30" name="id" placeholder="아이디를 입력해주세요"></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type="password" size="30" name="pwd" placeholder="비밀번호를 입력해주세요"></td>
  </tr>
  <tr>
   <td>Confirm Password</td>
   <td><input type="password" size="30" name="pwd2" placeholder="비밀번호 확인을 입력해주세요"></td>
  </tr>
  <tr>
   <td>name</td>
   <td><input type="text" size="12" maxlength="10" name="name" placeholder="이름을 입력해주세요"></td>
  </tr>
  <tr>
   <td>address</td>
   <td><input type="text" size="40" name="addr" placeholder="주소를 입력해주세요"></td>
  </tr>
  <tr>
   <td>sex</td>
   <td><input type="text" size="6" maxlength="2" name="sex" placeholder="성별을 입력해주세요"></td>
  </tr>
  <tr>
   <td>birth day</td>
   <td><input type="text" size="6" maxlength="8" name="birthDay" placeholder="생년월일을 입력해주세요"></td>
  </tr>
  <tr>
   <td>e-mail</td>
   <td><input type="text" size="30" name="email" placeholder="이메일을 입력해주세요"></td>
  </tr>
 </table>
 <input type=submit value="회원가입"><input type=reset value="다시쓰기">
</form>
</body>
</html>


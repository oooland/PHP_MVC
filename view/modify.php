<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>사용자 등록</title>
</head>
<body>
<form action="modify_process" method="post">
    <b>사용자 정보 등록</b><br>
    수정할 ID를 입력하세요
    ID:<input type="text" name="userid" id = "userid" >
    <input type="submit" value="사용자 정보 조회">
</form>
    <ol>
        <li>사용자 ID: <input type="text" name="userid" id = "userid" ></li>
        <li>이름: <input type="text" name="username" id = "username"></li>
        <li>암호: <input type="text" name="password" id = "password" ></li>
        <li>구분: <select name="classification" >
                <option value="staff" >교직원</option>
                <option value="student" selected>학생</option>
            </select></li>
        <li>성별: <select name="gender">
                <option value="male">남성</option>
                <option value="female" selected>여성</option>
            </select></li>
        <li>전화번호: <input type="text" name="phone" id = "phone" ></li>
        <li>이메일: <input type="text" name="email" id="email" ></li>
    </ol>
    <input type="submit" value="수정">

</body>
<script>
</script>
</html>


<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>사용자 등록</title>
</head>
<body>
<form action="delete_process" method="POST">
    <b>회원 삭제</b><br>
    <ol>
        <li>사용자 ID: <input type="text" name="userid"></li>
        <li>암호: <input type="text" name="password"></li>
    </ol>
    <input type="submit" value="삭제하기">
    <input type="hidden" value="delete">
</form>
</body>
</html>

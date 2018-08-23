<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>사용자 정보 수정</b><br>
<?php foreach ($users as $user):?>
    수정할 ID를 입력하세요
    ID:<input type="text" name="userid" value="<?php echo $user->userid?>" id="sendID">
    <input type="submit"  value="사용자 정보 조회">
<form action="modify_process2" method="post">
    <ol>
        <li>사용자 ID: <input type="text" name="changedId" value="<?php echo $user->userid?>" ></li>
        <li>이름: <input type="text" name="username" value="<?php echo $user->name ?>" ></li>
        <li>암호: <input type="text" name="password" value="<?php echo $user->password ?>" ></li>
        <li>구분: <select name="classification" value="<?php echo $user->classification ?>" >
                <option value="staff" >교직원</option>
                <option value="student" selected>학생</option>
            </select></li>
        <li>성별: <select name="gender" value="<?php echo $user->gender?>">
                <option value="male">남성</option>
                <option value="female" selected>여성</option>
            </select></li>
        <li>전화번호: <input type="text" name="phone" value="<?php echo $user->phone?>"></li>
        <li>이메일: <input type="text" name="email" value="<?php echo $user->email?>"></li>
        <li><input type="submit" value="등록하기"></li>
    </ol>
</form>
<?php endforeach;?>
</body>
<script>
</html>

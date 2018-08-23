<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>사용자 등록</title>
</head>
<body>
<?php foreach ($users as $user):?>
    <h1>회원정보</h1>
    <table boarder = 1 width="1000" style="padding: 1%">
        <tr><th>아이디</th><th>이름</th><th>직업</th><th>성별</th><th>폰</th><th>이메일</th></tr>
        <tr>
            <td><?php echo $user->userid?></td>
            <td><?php echo $user->name?></td>
            <td><?php echo $user->classification?></td>
            <td><?php echo $user->gender?></td>
            <td><?php echo $user->phone?></td>
            <td><?php echo $user->email?></td>
        </tr>
    </table>
<?php endforeach;?>
</body>
<script>
</script>
</html>


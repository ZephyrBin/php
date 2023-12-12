<!DOCTYPE html>
<html>
<head>
    <title>php-memo 회원가입</title>
</head>
<body>
<?php require_once("inc/header.php"); ?>
<h1>php-memo 회원가입</h1>
<form method="POST" action="regist.post.php">
    <p>
        아이디 :
        <label>
            <input type="text" name="login_id" />
        </label>
    <p>
    <p>
        비밀번호 :
        <label>
            <input type="password" name="login_pw" />
        </label>
    <p>
    <p>
        이름 :
        <label>
            <input type="text" name="login_name" />
        </label>
    <p>
    <p><input type="submit" value="회원가입"></p>
</form>
</body>
</html>

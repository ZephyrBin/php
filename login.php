<!DOCTYPE html>
<html>
<head>
    <title>php-memo 로그인</title>
</head>
<body>
<?php require_once("inc/header.php"); ?>
<h1>php-memo 로그인</h1>
<form method="POST" action="login.post.php">
    <p>
        아이디(이메일) :
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
    <p><input type="submit" value="로그인"></p>
</form>
</body>
</html>
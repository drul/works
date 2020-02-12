<?php
include_once 'classes/authBody.php';
include_once 'connection.php';
$logPass = new authBody($_POST);

?>
<form action="auth.php" method="post">
    <label for="login">Логин</label> <br/>
    <input type="text" id="login" name="login"> <br/>
    <label for="password">Пароль</label> <br/>
    <input type="password" id="password" name="password"> <br/>
    <button>submit</button>

</form>

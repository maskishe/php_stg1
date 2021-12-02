<form method="post" action='/php_stg1/login.php'>
        <p><input type="email" name="email" /></p>
        <p><input type="password" name="password" /></p>
        <p><input type="checkbox" name="rememberme" /></p>
        <p><input type="submit" value="Войти" /></p>
</form>

<?php

if (isset($_POST['email'], $_POST['password'])) {
    require_once 'db.php';
    global $DBLink;
    $result = mysqli_query($DBLink, "select * from user where email='". $_POST['email'] . "'");
    $result = mysqli_fetch_assoc($result);
    if (password_verify($_POST['password'], $result['password'])) {
        setcookie('islogged', '1');
        header('location: /php_stg1/closed_area.php');
        die();
    }
    echo 'Incorrect login/password';
}

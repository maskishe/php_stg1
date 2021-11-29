<form method="post" action='/php_stg1/register.php'>
        <p><input type="email" name="email" /></p>
        <p><input type="password" name="password" /></p>
        <p><input type="submit" value="Войти" /></p>
</form>

<?php
    require_once 'db.php';
    if (isset($_POST['email'], $_POST['password'])) {
        global $DBLink;
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "insert into user set email='" . $_POST['email'] . "', password='" . $password . "', first_name='', last_name='';";
        //var_dump($query);
        //$query = mysqli_real_escape_string($DBLink, $query);
        mysqli_query($DBLink, $query);
        echo 'Registration success';
    }
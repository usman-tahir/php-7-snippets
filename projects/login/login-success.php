<?php

session_start();
if (!session_is_registered(formUsername)) {
    header("location:main-login.php");
}

?>

<html>
    <body>
        <p>Login Successful.</p>
    </body>
</html>
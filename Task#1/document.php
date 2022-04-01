<?php
    session_start();
    if ($_SESSION["Login"] != "YES"){
        header("Location:loginForm.html");
    }
?>
<html>
    <body>
        <h1>THIS IS A CONFIDENTIAL DOCUMENT</h1>
        <p>you can only see this document if you are logged in</p>
    </body>
</html>
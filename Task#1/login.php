<html>
    <head>
        <title>LOGIN</title>
    </head>
</html>

<?php
    session_start();
    if ($_POST["userName"] == 'uzair' && $_POST["password"] == 'k181148')
    {
        $_SESSION["Login"] = "YES";
        echo "<h1>YOU ARE SUCCESFULLY LOGGED IN</h1>";
        echo "<p><a href='document.php'>Link to protected file</a></p>";
    }
    else
    {
        $_SESSION["Login"] = "NO";
        echo "<h1>Credentials are not correct</h1>";
        echo "<p><a href='login.html'>Login Again</a></p>";
    }
?>

<?php
session_start();
require"config.php";
session_destroy();
?>
<html>
    <link rel="stylesheet" href="style1.css">
</html>
<?php
echo"<h1>you have successfully logged out
<a href='index1.php'>click here</a>to login</h1>";
?>

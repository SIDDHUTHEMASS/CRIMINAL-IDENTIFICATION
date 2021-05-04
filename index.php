<?php
session_start();
require"config.php";
?>
<html>
    <title>
        Criminal Database 
    </title>
            <link href="style1.css" type="text/css" rel="stylesheet"/>  
    <body>
        <h1 class="title">Interstate and Intercountry Criminal Database Management System</h1>
        <div class="adminregform">
        <form method="post" action="addcriminalstate.php">
        <button class="btnreg" id="submit1" name="submit1">Add criminal In Interstate</button>
        </form>
            <form method="post" action="searchcriminalstate.php">
        <button class="btnreg" id="submit2" name="submit2">View Criminals In Interstate</button>
        </form> 
            <form method="post" action="addcriminalcountry.php">
        <button class="btnreg" id="submit3" name="submit3">Add criminal In InterCountry</button>
        </form>
            <form method="post" action="searchcriminalcountry.php">
        <button class="btnreg" id="submit4" name="submit4">View Criminals In InterCountry</button>
        </form> <br>
            <p style="text-align:right">&copy;Copyrights Reserved 2020</p>
        </div>
    </body>
</html>
<?php
require"config.php";
if(isset($_POST['submit']))
    {
        $b=$_POST['name'];
        $m=$_POST['country'];
        $c=$_POST['sex'];
        $d=$_POST['hair'];
        $f=$_POST['eyes'];
        $g=$_POST['height'];
        $h=$_POST['weight'];
        $j=$_POST['finger'];
        $k=$_POST['glass'];	
        if($b=="" && $m=="" && $c=="" && $d=="" && $f=="" && $g=="" && $h=="" && $j=="" && $k=="")
		{
            echo"please fill in all the information";
        }
        else
        {
	$img=$_FILES['image']['tmp_name'];
           	 $imgcontent=addslashes(file_get_contents($img));
            $j_qry=$conn->query("Insert into criminalcountry(image,name,country,sex,hair,eyes,height,weight,finger,glass)values('$imgcontent','$b','$m','$c','$d','$f','$g','$h','$j','$k')");
            if($j_qry)
            {
                echo"registered successfully";
                       echo"<script>location.href='viewcriminalcountry.php';</script>";
				?>
<script type="text/javascript">windows.location="index.php";</script>
<?php
            }
            else{
                echo"invalid";?>
<script type="text/javascript">windows.location="index.php";</script>
<?php
                
            }
        }
    }

?>
<html>
<head>
<title>admin registration form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container">
    <h1 class="title">Criminal Data Entry In InterCountry</h1>
    <div class="adminregform">

         <form action="addcriminalcountry.php" method="post" enctype="multipart/form-data"> Select image to upload:
            <input type="file" name="image" id="fileToUpload">


            <div class="form-group" auto>
                <label style="color:black">Name:<p></p></label>
                <input type="text" name="name" id="name"  required >
            </div><br>
             <div class="form-group" auto>
                <label style="color:black">Country:<p></p></label>
                <input type="text" name="country" id="country"  required >
            </div><br>
             <div class="form-group">
                 <label style="color:black">Sex:<p></p></label>
                <input type="text" name="sex" id="sex" required >
            </div><br>
             <div class="form-group">
                 <label style="color:black">Hair:<p></p></label>
                <input type="text" name="hair" id="hair"  required >
            </div><br>
            <div class="form-group">
                <label style="color:black">Eyes:<p></p></label>
                <input type="text" name="eyes" id="eyes"  required>
            </div><br>
            <div class="form-group">
                <label style="color:black">Height:<p></p></label>
                <input type="text" name="height" id="height"  required >
            </div><br>
            <div class="form-group">
                <label style="color:black">Weight:<p></p></label>
                <input type="text" name="weight" id="weight"  required >    
             </div><br>
            <div class="form-group">
                <label style="color:black">Fingerprint:<p></p></label>
            <input type="text" name="finger" id="finger"  required >
                </div>
             <div class="form-group">
                 <label style="color:black">Does he wear any glasses:<p></p></label>
            <input type="text" name="glass" id="glass"  required >
                </div>
                <div>
                    <button class="btnreg" id="submit" name="submit">Register</button>
     </div><br>
			 
                </form>
</div>
    </div>
</body>
</html>
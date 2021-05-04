<html>
<head>
<title>Search if the criminal can be found here</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container">
    <h1 class="title"><i>Search the criminal here</i></h1>
    <div class="adminregform">
        <form method="post" action="searchcriminalstate.php">
			<div class="form-group">
                <label style="color:black">Name:</label>
                <input name="name" type="text" id="name"  required >
            </div><br>

			<div class="form-group">
                <label style="color:black">Height:</label>
                <input name="height" type="text" id="height"  required>
            </div><br>

			<div >
                   <button class="btnreg" id="submit" name="submit">Search</button>
			</div><br>
	
		    <div>
		     	<button class="btnreg" id="Cancel" name="Cancel">want to add some other criminals click here</button>
            </div>
        </form>
	</div>
</div>
</body>
</html>

<?php
session_start();

if(isset($_SESSION["name"]))
{
	header("location:searchcriminalstate.php");
}
if(isset($_POST['submit']))
{   $name=$_POST['name'];
	$height=$_POST['height'];
	if($name=='' && $height=='')
	{
		echo "please fill in all the information";
 ?>
<script type="text/javascript">windows.location="searchcriminalstate.php";</script>
	<?php
    }
	else
	{	
    ?>

    <script type="text/javascript">alert("Searching");</script>
<?php
	 $conn=mysqli_connect("localhost","root","","criminal");
     

	$sql="SELECT *FROM criminalstate where name='$name'and height='$height'";
    $result=mysqli_query($conn,$sql);
    echo"<table border=5 bgcolor=skyblue>";
        while($rows=mysqli_fetch_array($result))
         {
         echo "<br><br><br><br><br><br><br><br><br><br>
            <tr>
	<tr><img src='data:image;base64,".base64_encode($rows['image'])."' style='width:100px;height:100px;'></tr>
                  <td   height=100 width=100 bgcolor=red>".$rows['name']."</td>
	 <td height=100 width=100>".$rows['state']."</td>
                  <td height=100 width=100>". $rows['sex']."</td>
                  <td height=100 width=100>".$rows['hair']."</td>
                  <td height=100 width=100>".$rows['eyes']."</td>
                  <td height=100 width=100>".$rows['height']."</td>
                  <td height=100 width=100>".$rows['weight']."</td>
                  <td height=100 width=100>".$rows['finger']."</td>
                  <td height=100 width=100>".$rows['glass']."</td>
             </tr>";
              }	
     echo"</table>";
    
     }
			 
}		
else
	{
	echo "iNVALIDLOGIN";
	}
	

if(isset($_POST['Cancel']))
{
	?>
	<script>window.location="addcriminalstate.php";</script>
<?php
}
?>


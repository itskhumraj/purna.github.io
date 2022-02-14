<!DOCTYPE html>
<html>
<head>
	<style>
		form{
			background-color: purple;
			color: white;
			padding: 40px 20px;
			border:3px solid black;
			box-shadow: 5px 5px 4px rgba(0,0,0,0.25);
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			text-transform: capitalize;
			margin-right: 200px;
		



		}
		*{
			margin: 0px;
			padding: 0px;
		}

input{
	padding: 7px;
	border-radius: 6px;
	width: 60%;


}

input[type="submit"]
{
background-color: red;
color:white;
text-align: center;
font-size: 23px;
width: 30%;
margin-left: 20%;
}


	</style>
	<title></title>
</head>
<body>

<form method="post">
	<label>principle:</label><br>
	<input type="number" name="principle"><br><br>

	<label>rate</label><br>
	<input type="number" name="rate"><br><br>

	<label>time</label><br>
	<input type="number" name="time"><br><br>

	<input type="submit" name="submit"><br><br>
	

<?php 
if(isset($_POST['submit']))
{

$pr = $_POST['principle'];
$rt = $_POST['rate'];
$tm = $_POST['time'];
$si = ($pr*$rt*$tm)/100;
echo  $si . "<br>";
echo "the total money after". " " . $tm ." " . " year including principle is " . ($pr + $si) . " " . "congrats......";

}






 ?>


</form>




</body>
</html>
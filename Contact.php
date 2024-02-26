<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        .form{
            position: absolute;
            top:100px;
            left:500px;
            box-shadow: 10px 10px gray;
            border:1px solid black;
            padding: 100px;
            padding-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form">
        <h2>Contact Form</h2>
    <form method="post" style="padding-top: 40px;">
        <label>Name:</label>
        <input type="text" name="Name" placeholder="Enter Name"><br><br>
        <label>Email:</label>
        <input type="email" name="Email" placeholder="Enter Email"><br><br>
        <lable>Contact No.:</lable>
        <input type="number" name="Number" placeholder="Enter Contact No."><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
	<?php
	include('confi.php');
	if(isset($_POST['submit'])){
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Number=$_POST['Number'];
	$a=mysqli_query($con,"Insert into Contact (Id,Name,Email,Contact_No) values(0,'$Name','$Email','$Number')");
	}
	?>
</body>
</html>
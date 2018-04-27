<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
if(!isset($_SESSION['username']) || empty($_SESSION['username']))
	{
		header("location: login.php");
		exit;
	}
if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
	$mobile = $_POST['mobile'];
        
    // checking empty fields
    if(empty($name) || empty($age) || empty($email)|| empty($mobile)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		if(empty($mobile)) {
            echo "<font color='red'>Mobile field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		
    } else 
	
	if
	(isset($_POST['add']))
	{
	mysqli_connect('localhost','root','');
	mysqli_select_db('test');
	$name=$_POST['name'];
	$query=mysqli_query("select * from user where name='".$name."' ") or die(mysqli_error());
	$duplicate=mysql_num_rows($query);
	if($duplicate==0)
    { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO users(name,age,email,mobile) VALUES('$name','$age','$email','$mobile')");
        
        //launch to target location
		header("Location:hompage.php");
    }
}
    else
    {
      echo'The name '.$name.' is already exist. Click <a href="hompage.php">Here!</a>'; 
    }
}
?>
</body>
</html>
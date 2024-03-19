<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>

  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="" method="POST">
        <input type="text" name="chit_bilet" placeholder="Номер билета">
        <input type="password" name="parol" placeholder="Enter your password">
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Нет аккаунта?
        <a href="registr.php">sign up</a>
        </span>
      </div>
    </div>
    <?php
$host='localhost';
$db='exam';
$user='root';
$password='';
$log1="";
$pass1="";

$link=mysqli_connect($host,$user,$password,$db) or die("Ошибка".mysqli_error($link));
if(isset($_POST['chit_bilet']) && isset ($_POST['parol'])){
    $Log = $_POST['chit_bilet'];
    $passwor = $_POST['parol'];
    if(($Log=="")||($passwor==""))
			{
				
			}
            else{
$query = "select * from student where chit_bilet='$Log' and parol='$passwor'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		if($result) 
    while ($row = mysqli_fetch_assoc($result)) {
		
		$log1=$row['chit_bilet'];
		$pass1=$row['parol'];
				
	}
	if(($log1!=$Log)&&($pass1!=$passwor))
	{
        echo "<script>alert(\"Данного аккаунта - не существует, либо неправильно введены данные\");</script>"; 
	}
    else{
		    header("Location: stranichka.php");
		}
		
		}
    }
?>
</body>
</html>
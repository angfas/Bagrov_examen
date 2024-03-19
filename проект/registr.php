<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
$host = 'localhost'; 
$user = 'root';
$pass = '';
$name = 'exam';
$link = mysqli_connect($host, $user, $pass, $name);
?>
</head>
<body>
<div class="registration form">
      <header>Signup</header>
      <form action="#" method=post>
        <input type="text" name="familia" placeholder="Фамилия">
        <input type="text" name="imya" placeholder="Имя">
        <input type="text" name="otchestvo" placeholder="Отчество">
        <input type="text" name="facultet" placeholder="Факультет">
        <input type="text" name="kurs" placeholder="Курс">
        <input type="text" name="chit_bilet" placeholder="читательский билет">
        <input type="text" name="parol" placeholder="Create a password">
        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Уже есть аккаунт?
        <a href="autorization.php">Login</a>
        </span>
      </div>
    </div>
  </div>
  <?php
	if (!empty($_POST['login']) and !empty($_POST['password'])) {
		$familia = $_POST['familia'];
		$imya = $_POST['imya'];
        $otchestvo = $_POST['otchestvo'];
		$facultet = $_POST['facultet'];	
        $kurs = $_POST['kurs'];
		$chit_bilet = $_POST['chit_bilet'];
        $parol = $_POST['parol'];
		$query = "insert into polzovatel(familia,imya,otchestvo,facultet,kurs,chit_bilet,parol) values('$familia', '$imya', '$otchestvo','$facultet', '$kurs',,'$chit_bilet', '$parol')";
		$result = mysqli_query($link, $query) or die ("Ошибка".mysqli_error($link));
	}
?>

</body>
</html>
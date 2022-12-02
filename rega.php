<?php
session_start();
include('connect.php');
if(isset($_POST['login1'])){
$pass1 = $_POST['password'];
$pass2 = $_POST['password1'];
if($pass2 != $pass1 and strlen($pass1) < 3 and strlen($pass1) >60){
echo("Пароли не совпадают!");
}
else{
$username = $_POST['username'];
$password = md5(trim($_POST['password1']));
$query = "INSERT INTO `users`(login, password) VALUES ('$username', '$password')";
$sql = mysqli_query($mysqli, $query);
if ($sql) {
$new_url = 'php3lab.php';
header('Location: '.$new_url);
} else {
echo '<p class="error">Неверные данные!</p>';
}
$mysqli->close();
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>
<form method="post" action="">
<label>Логин</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+"/>
<label>Пароль</label>
<input type="password" name="password"/>
<label>Повторите пароль</label>
<input type="password" name="password1"/>
<button type="submit" name="login1" value="login1">Регистрация</button>
</form>
</body>
</html>

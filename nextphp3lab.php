<?php
   include('connect.php');
    
    session_start();
    if(isset($_POST['otpravka'])){
        $username = $_POST['textarea'];
        $html = array('<br>' , '<b>' , '</b>' , '<font>' , '</font>' , '<center>' , '</center>');
        $SQL = '/show|create|use|source|drop|show|create|insert|update|delete|drop|select|where|beetween|like|in|join|view/';
        $username = strip_tags($textarea, $html);
        $username = preg_replace($SQL, '', $textarea);
        $query = "INSERT INTO `comm`(comments) VALUES ('$textarea')";
        $sql = mysqli_query($mysqli, $query);
            if ($sql){

            }
            else {
            echo '<p class="error">ошибка</p>';
            }   
            $mysqli->close();
        }   
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    text-align: center;
    width: 800px;
}
label {
    display: inline-block;
    text-align: center;
    font-size: 25px;
    width: 70px;
    height: 10px;
    font-family: 'Times New Roman';
}
input {
    border: 2px solid black;
    font-size: 25px;
    font-family: 'Times New Roman';
    width:300px;
    height: 50px;
    margin-left:10px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 3px solid black;
    width: 500px;
    background: white;
}
div.form-element {
    margin-top: 20px;
    margin-bottom: 20px;
}
a {
    padding: 10px;
    font-size: 25px;
    font-family: 'Times New Roman';
    font-weight: 100;
    background: white;
    color: black;
}
</style>
<script>

</script>

<body>
    <form method="post" action="">
    <textarea id="textarea" name="textarea" ></textarea>
    <button type="submit" name="otpravka" value="otpravka">Отправить</button>
    <a href = "logout.php?do=logout">Выход</a>
</form>

    
</body>
</html>

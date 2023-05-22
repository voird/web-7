//login.php

$login = mysql_real_escape_string($_POST['login']);
$password = mysql_real_escape_string($_POST('pass']);
$query = "SELECT * FROM users WHERE login '$login'"
$check=$db1->prepare("SELECT * FROM login WHERE login='$login'");
$result = mysql_query ($check) ;

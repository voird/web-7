//login.php

$login = mysql_real_escape_string($_POST['login']);
$password = mysql_real_escape_string($_POST('pass']);
$query = "SELECT * FROM users WHERE login '$login'"
$check=$db1->prepare("SELECT * FROM login WHERE login='$login'");
$result = mysql_query ($check) ;

// подзапрос

if(!empty($login) and !empty($pswrd)){
        try{
            $check=$db1->prepare("SELECT * FROM login WHERE login=?");
            $check->bindParam(1,$login);
            $check->execute();
            $username=$check->fetchALL();
      //     echo '<pre>';
      //      print_r($username);
    //        var_dump($username);
     //       echo '</pre>';
            if(password_verify($pswrd,$username[0][2])){
                $uid=$username[0]['id'];
                $error=FALSE;
            }
        }
        catch(PDOException $e){
            print('Error : ' . $e->getMessage());
            exit();
        }
    }

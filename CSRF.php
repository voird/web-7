
<form action="some_action.php" method="post">
   <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
   <!-- остальные поля формы -->
</form>


// На стороне сервера необходимо сравнить значение токена из формы с сохраненным на сервере значением:


session_start();

if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
   // токены совпали, обработка запроса
} else {
   // токены не совпали, запрос отклонен
}

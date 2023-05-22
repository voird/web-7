// Санитизация

$fio = strip_tags($_POST['fio']);
$email = strip_tags($_POST['email']);
$year = intval($_POST['year']);
$gender = strip_tags($_POST['gender']);
$gender = strip_tags($_POST['gender']);
$message = strip_tags($_POST['text']);
$spwr = strip_tags($_POST['superpower']);
$limbs = strip_tags($_POST['limbs']);

// Пример проверка на соответствие формату

if (!preg_match("/^[\w\.-]+@([\w-]+\.)+[\w-]{2,4}$/", $_POST['email']) || empty($_POST['email'])) {
  print('Заполните email.<br/>');
  $errors = TRUE;
}

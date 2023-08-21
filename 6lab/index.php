<?php
$user = 'u52935';
$pass = '9788678';
$db = new PDO('mysql:host=localhost;dbname=u52935', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
//Запрашивается хэш пароля администратора из базы данных:
$pass_hash=array();
try{
  $get=$db->prepare("select pass from admin where user=?");
  $get->execute(array('admin'));
  $pass_hash=$get->fetchAll()[0][0];
}
catch(PDOException $e){
  print('Error: '.$e->getMessage());
}
//Происходит проверка аутентификации пользователя: Если данные отсутствуют или имя пользователя не равно "admin", или хэш MD5 пароля не совпадает с сохраненным хэшем из базы данных, выполняется следующее:
//Устанавливается HTTP-статус 401 (Unauthorized).
//Добавляется заголовок WWW-Authenticate, чтобы запросить у пользователя данные аутентификации.
//Выводится сообщение об ошибке и прекращается выполнение скрипта.
if (empty($_SERVER['PHP_AUTH_USER']) ||
      empty($_SERVER['PHP_AUTH_PW']) ||
      $_SERVER['PHP_AUTH_USER'] != 'admin' ||
      md5($_SERVER['PHP_AUTH_PW']) != $pass_hash) {
    header('HTTP/1.1 401 Unanthorized');
    header('WWW-Authenticate: Basic realm="My site"');
    print('<h1>401 Unauthorized (Требуется авторизация)</h1>');
    exit();
}
if(empty($_GET['edit_id'])){
  header('Location: admin.php');
}
//Этот код создает защищенную административную часть веб-приложения. Пользователь должен будет предоставить 
//корректные данные аутентификации (имя пользователя и пароль) для доступа к административным функциям.
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $messages = array();
  if (!empty($_COOKIE['save'])) {
    setcookie('save', '', 100000);
    //// Если есть параметр save, то выводим сообщение пользователю.
    $messages[] = 'Спасибо, результаты сохранены.';
    setcookie('name_value', '', 100000);
    setcookie('email_value', '', 100000);
    setcookie('year_value', '', 100000);
    setcookie('pol_value', '', 100000);
    setcookie('limb_value', '', 100000);
    setcookie('bio_value', '', 100000);
    setcookie('inv_value', '', 100000);
    setcookie('walk_value', '', 100000);
    setcookie('fly_value', '', 100000);
    setcookie('check_value', '', 100000);
  }
  // Выдаем сообщения об ошибках.
//По сути, данный код обрабатывает ситуацию, когда у пользователя есть ошибка в поле "имя" (если значение в $errors['name'] равно true). 
//Он удаляет соответствующее cookie и добавляет сообщение об ошибке в массив для последующего отображения на веб-странице.
  $errors = array();
  $error=FALSE;
  $errors['name'] = !empty($_COOKIE['name_error']);
  $errors['email'] = !empty($_COOKIE['email_error']);
  $errors['year'] = !empty($_COOKIE['year_error']);
  $errors['radio-1'] = !empty($_COOKIE['pol_error']);
  $errors['radio-2'] = !empty($_COOKIE['limb_error']);
  $errors['super'] = !empty($_COOKIE['super_error']);
  $errors['bio'] = !empty($_COOKIE['bio_error']);
  $errors['check-1'] = !empty($_COOKIE['check_error']);
  if ($errors['name']) {
    setcookie('name_error', '', 100000);
    $messages[] = '<div class="error">Заполните имя или у него неверный формат (only English)</div>';
    $error=TRUE;
  }
  if ($errors['email']) {
    setcookie('email_error', '', 100000);
    $messages[] = '<div class="error">Заполните имейл или у него неверный формат</div>';
    $error=TRUE;
  }
  if ($errors['year']) {
    setcookie('year_error', '', 100000);
    $messages[] = '<div class="error">Выберите год.</div>';
    $error=TRUE;
  }
  if ($errors['radio-1']) {
    setcookie('pol_error', '', 100000);
    $messages[] = '<div class="error">Выберите пол.</div>';
    $error=TRUE;
  }
  if ($errors['radio-2']) {
    setcookie('limb_error', '', 100000);
    $messages[] = '<div class="error">Укажите кол-во конечностей.</div>';
    $error=TRUE;
  }
  if ($errors['super']) {
    setcookie('super_error', '', 100000);
    $messages[] = '<div class="error">Выберите суперспособности(хотя бы одну).</div>';
    $error=TRUE;
  }
  if ($errors['bio']) {
    setcookie('bio_error', '', 100000);
    $messages[] = '<div class="error">Заполните биографию или у неё неверный формат (only English)</div>';
    $error=TRUE;
  }
  $values = array();
  $values['inv'] = 0;
  $values['walk'] = 0;
  $values['fly'] = 0;
  
  $user = 'u52935';
  $pass = '9788678';
  $db = new PDO('mysql:host=localhost;dbname=u52935', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
  try{
      $id=$_GET['edit_id'];
	  //Этот запрос выбирает все столбцы из таблицы 'form', где значение столбца 'id' соответствует значению $_SESSION['uid'].
      $get=$db->prepare("SELECT * FROM form WHERE id=?");
      $get->bindParam(1,$id);
      $get->execute();
      $inf=$get->fetchALL();
	  //Результат запроса сохраняется в массиве $inf, и затем код извлекает определенные значения из этого массива и сохраняет их в массиве $values.
      $values['name']=$inf[0]['name'];
      $values['email']=$inf[0]['email'];
      $values['year']=$inf[0]['year'];
      $values['radio-1']=$inf[0]['pol'];
      $values['radio-2']=$inf[0]['limbs'];
      $values['bio']=$inf[0]['bio'];
    //Этот запрос выбирает столбец 'name' из таблицы 'super', где значение столбца 'per_id' соответствует значению $_SESSION['uid'].
//Результат второго запроса сохраняется в массиве $inf2, и затем код проверяет значения в этом массиве и устанавливает соответствующие 
//значения в массиве $values в зависимости от того, какие значения 'name' были найдены.
      $get2=$db->prepare("SELECT name FROM super WHERE per_id=?");
      $get2->bindParam(1,$id);
      $get2->execute();
      $inf2=$get2->fetchALL();
      for($i=0;$i<count($inf2);$i++){
        if($inf2[$i]['name']=='inv'){
          $values['inv']=1;
        }
        if($inf2[$i]['name']=='walk'){
          $values['walk']=1;
        }
        if($inf2[$i]['name']=='fly'){
          $values['fly']=1;
        }
      }
    }
    catch(PDOException $e){
      print('Error: '.$e->getMessage());
      exit();
  }
  // этот код отвечает за получение информации о пользователе и его свойствах из базы данных, если пользователь успешно авторизован. 
//Он выполняет два SQL-запроса к разным таблицам, обрабатывает результаты запросов и сохраняет данные в массив $values, который затем используется для вывода информации о входе пользователя.
  include('form.php');
}
else {
  if(!empty($_POST['save'])){
    $id=$_POST['dd'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $pol=$_POST['radio-1'];
    $limbs=$_POST['radio-2'];
    $powers=$_POST['super'];
    $bio=$_POST['bio'];

    //Регулярные выражения
    $bioregex = "/^\s*\w+[\w\s\.,-]*$/";
    $nameregex = "/^\w+[\w\s-]*$/";
    $mailregex = "/^[\w\.-]+@([\w-]+\.)+[\w-]{2,4}$/";
    $errors = FALSE;
    // Проверяем ошибки.
//В результате, код проверяет значение поля "name" отправленное через POST-запрос на соответствие заданному регулярному выражению. Если значение не соответствует, то ошибка записывается в куку "name_error",
// и предыдущее значение удаляется. Если значение соответствует, то значение сохраняется в куку "name_value". Флаг $errors позволяет далее коду определить, были ли найдены ошибки в процессе проверки.
    if (empty($name) || (!preg_match($nameregex,$name))) {
      setcookie('name_error', '1', time() + 24*60 * 60);
      setcookie('name_value', '', 100000);
      $errors = TRUE;
    }

    if (empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL) ||
     (!preg_match($mailregex,$email))) {
      setcookie('email_error', '1', time() + 24*60 * 60);
      setcookie('email_value', '', 100000);
      $errors = TRUE;
    }
    
    if ($year=='Год') {
      setcookie('year_error', '1', time() + 24 * 60 * 60);
      setcookie('year_value', '', 100000);
      $errors = TRUE;
    }
   
    if (!isset($pol)) {
      setcookie('pol_error', '1', time() + 24 * 60 * 60);
      setcookie('pol_value', '', 100000);
      $errors = TRUE;
    }
    
    if (!isset($limbs)) {
      setcookie('limb_error', '1', time() + 24 * 60 * 60);
      setcookie('limb_value', '', 100000);
      $errors = TRUE;
    }

    if (!isset($powers)) {
      setcookie('super_error', '1', time() + 24 * 60 * 60);
      $errors = TRUE;
    }
    
    if ((empty($bio)) || (!preg_match($bioregex,$bio))) {
      setcookie('bio_error', '1', time() + 24 * 60 * 60);
      setcookie('bio_value', '', 100000);
      $errors = TRUE;
    }
    
    if ($errors) {
      setcookie('save','',100000);
      header('Location: index.php?edit_id='.$id);
    }
    else {
      setcookie('name_error', '', 100000);
      setcookie('email_error', '', 100000);
      setcookie('year_error', '', 100000);
      setcookie('pol_error', '', 100000);
      setcookie('limb_error', '', 100000);
      setcookie('super_error', '', 100000);
      setcookie('bio_error', '', 100000);
      setcookie('check_error', '', 100000);
    }
    
    $user = 'u52935';
    $pass = '9788678';
    $db = new PDO('mysql:host=localhost;dbname=u52935', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
    // Если нет предыдущих ошибок ввода, есть кука сессии, начали сессию и
  // ранее в сессию записан факт успешного логина.
    if(!$errors){
      $upd=$db->prepare("UPDATE form SET name=:name, email=:email, year=:byear, pol=:pol, limbs=:limbs, bio=:bio WHERE id=:id");
      $cols=array(
        ':name'=>$name,
        ':email'=>$email,
        ':byear'=>$year,
        ':pol'=>$pol,
        ':limbs'=>$limbs,
        ':bio'=>$bio
      );
      foreach($cols as $k=>&$v){
        $upd->bindParam($k,$v);
      }
      $upd->bindParam(':id',$id);
      $upd->execute();
      $del=$db->prepare("DELETE FROM super WHERE per_id=?");
      $del->execute(array($id));
      $upd1=$db->prepare("INSERT INTO super SET name=:power,per_id=:id");
      $upd1->bindParam(':id',$id);
      foreach($powers as $pwr){
        $upd1->bindParam(':power',$pwr);
        $upd1->execute();
        //Общий смысл этого кода - после выполнения набора проверок и подготовки данных, код обновляет информацию о пользователе в таблице 'form', а также обновляет информацию о привилегиях пользователя в таблице 'super' 
	//(удаляя предыдущие и вставляя новые). Это, вероятно, выполняется после того, как пользователь внес изменения в свой профиль и/или привилегии.
      }
    }
    
    if(!$errors){
      setcookie('save', '1');
    }
    header('Location: index.php?edit_id='.$id);
  }
    //Значение переменной $id устанавливается из значения $_POST['dd'].
//Создается подключение к базе данных MySQL с заданными учетными данными.
//Производится подготовленный запрос для удаления записи из таблицы super с использованием параметра per_id.
//Производится подготовленный запрос для удаления записи из таблицы form с использованием параметра id.
//Устанавливаются cookies 'del' и 'del_user' с определенными значениями.
//Происходит перенаправление на страницу admin.php.
  else {
    $id=$_POST['dd'];
    $user = 'u52935';
    $pass = '9788678';
    $db = new PDO('mysql:host=localhost;dbname=u52935', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
    try {
      $del=$db->prepare("DELETE FROM super WHERE per_id=?");
      $del->execute(array($id));
      $stmt = $db->prepare("DELETE FROM form WHERE id=?");
      $stmt -> execute(array($id));
    }
    catch(PDOException $e){
      print('Error : ' . $e->getMessage());
    exit();
    }
    setcookie('del','1');
    setcookie('del_user',$id);
    header('Location: admin.php');
  }
  //Кратко, код проверяет наличие ошибок. Если ошибок нет, он устанавливает cookie и перенаправляет на index.php. 
  //Если есть ошибки, он удаляет данные из базы данных и устанавливает cookie перед перенаправлением на admin.php.

}


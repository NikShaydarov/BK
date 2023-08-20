<?php

if($_SERVER['REQUEST_METHOD']=='GET'){
  $user = 'u52935';
  $pass = '9788678';
  $db = new PDO('mysql:host=localhost;dbname=u52935', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
  $pass_hash=array();
  try{
    $get=$db->prepare("select pass from admin where user=?");
    $get->execute(array('admin'));
    $pass_hash=$get->fetchAll()[0][0];
  }
  catch(PDOException $e){
    print('Error: '.$e->getMessage());
    //Здесь скрипт подключается к базе данных, выполняет запрос для получения хеша пароля администратора из таблицы "admin". Хеш пароля сохраняется в переменной $pass_hash.
  }
  //аутентификация
  if (empty($_SERVER['PHP_AUTH_USER']) ||
      empty($_SERVER['PHP_AUTH_PW']) ||
      $_SERVER['PHP_AUTH_USER'] != 'admin' ||
      md5($_SERVER['PHP_AUTH_PW']) !=  $pass_hash) {
    header('HTTP/1.1 401 Unanthorized');
    header('WWW-Authenticate: Basic realm="My site"');
    print('<h1>401 Требуется авторизация</h1>');
    exit();
    //Здесь происходит проверка аутентификации. Если не предоставлены данные для аутентификации (PHP_AUTH_USER и PHP_AUTH_PW), или не соответствуют админ данным 
    //(имя пользователя "admin" и хеш пароля), то возвращается код ответа 401 Unauthorized, запрашивается базовая аутентификация и выводится сообщение о необходимости авторизации.
  }
  if(!empty($_COOKIE['del'])){
    echo 'Пользователь '.$_COOKIE['del_user'].' был удалён <br>';
    setcookie('del','');
    setcookie('del_user','');
  }
  print('Вы успешно авторизовались и видите защищенные паролем данные');
  //Если установлена cookie с именем 'del', выводится сообщение о удалении пользователя и сбрасываются соответствующие cookies. Затем выводится сообщение об успешной авторизации.
  $users=array();
  $pwrs=array();
  $pwr_def=array('inv','walk','fly');
  $pwrs_count=array();
  try{
    $get=$db->prepare("select * from form");
    $get->execute();
    $inf=$get->fetchALL();
    $get2=$db->prepare("select per_id,name from super");
    $get2->execute();
    $inf2=$get2->fetchALL();
    $count=$db->prepare("select count(*) from super where name=?");
    foreach($pwr_def as $pw){
      $i=0;
      $count->execute(array($pw));
      $pwrs_count[]=$count->fetchAll()[$i][0];
      $i++;
    }
  }
  catch(PDOException $e){
    print('Error: '.$e->getMessage());
    exit();
  }
  $users=$inf;
  $pwrs=$inf2;
  //Здесь выполняются запросы к базе данных для получения данных из таблиц "form" и "super". Затем данные сохраняются в соответствующих массивах $users и $pwrs. Кроме того, для каждой из значений $pwr_def 
  //, производится подсчет количества записей в таблице "super" для этого типа, и эти данные сохраняются в массиве $pwrs_count.
  include('tab.php');
}
//Общий результат выполнения этого скрипта - вывод защищенных паролем данных после успешной аутентификации администратора.


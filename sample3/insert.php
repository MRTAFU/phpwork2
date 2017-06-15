<?php 
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$opinion = $_POST['opinion'];
$star = $_POST['star'];

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("INSERT INTO gs_rt_table(id,fullname,email,opinion,star,indate)VALUES(NULL,:fullname,:email,:opinion,:star,sysdate())");
$stmt->bindValue(':fullname',$fullname,PDO::PARAM_STR);
$stmt->bindValue(':email',$email,PDO::PARAM_STR);
$stmt->bindValue(':opinion',$opinion,PDO::PARAM_STR);
$stmt->bindValue(':star',$star,PDO::PARAM_INT);
$status = $stmt->execute();


if($status == false){
    $error = $stmt->errorInfo();
    exit("Queryerror".$error[2]);
}else{
    header("Location:index.php");
    exit;
}
 ?>
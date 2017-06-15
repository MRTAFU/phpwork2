<?php
//1. POSTデータ取得
$bname = $_POST["bname"];
$burl = $_POST["burl"];
$bcomment = $_POST["bcomment"];



//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, bname, burl, bcomment,
rgstdate )VALUES(NULL, :bname, :burl, :bcomment, sysdate())");
$stmt->bindValue(':bname', $bname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':burl', $burl, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bcomment', $bcomment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;//エラーが起きるバージョンがあるため、おまじない的にexitを付ける。

}
?>

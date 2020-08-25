<?php
//変数の初期化
$sql = null;
$res = null;
//データベース接続と選択
$mysqli = new mysqli('localhost','root','Wogawa115!','contact_db');

if($mysqli -> connect_error){

 error_log($mysqli -> connect_error);
 exit();

}else{

 $mysqli->set_charset("utf8");

}

$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email1'];
$tel = $_POST['tel'];
$postal1 = $_POST['postal1'];
$postal2 = $_POST['postal2'];
$pref = $_POST['pref'];
$address = $_POST['address'];
$content = $_POST['content'];

//インサート文
$sql = "INSERT INTO form(name,gender,email,tel,postal1,postal2,pref,address,content)VALUES('$name','$gender','$email',$tel,$postal1,$postal2,$pref,'$address','$content')";

//実行
$res = $mysqli-> query($sql);
if(!$res){
error_log($mysqli -> error);
exit;
}

$mysqli -> close();
?>

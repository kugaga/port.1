<?php
try{
$dsn = 'mysql:dbname=porttry2;host=localhost;charset=utf8';
$user = 'root';
$password ='nagoya60809';

$dbh = new PDO($dsn,$user,$password);
} 
catch(PDOException $e){
    // 例外発生時の処理
    echo $e->getMessage(); // エラー内容を表示
} 
finally{ 
    // 例外の有無に関わらす実行されるコード 
    $dbh = NULL;  // エラーの有無に関わらず後処理
}
?>
<?php
// サンプルコード

// https://chariosan.com/2019/04/14/lamp_docker_pdoerror/
// hostにはコンテナ名を指定する必要がある
$pdo = new PDO('mysql:host=db;dbname=db_test;charset=utf8;', 'docker', 'docker');

$pdo->query('INSERT INTO test_table (id, name) VALUES (1, "mr_test")');
// テーブル全行取得（データ取得）
$result_rows = $pdo->query('SELECT * FROM test_table');
foreach ($result_rows as $result) {
    var_dump($result);
}

?>

<p>yeah</p>
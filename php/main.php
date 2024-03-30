<?php

// データベースに接続
$dsn = "mysql:host=db;port=3306;dbname=sample";
$username = "root";
$password = "secret";
$pdo = new PDO($dsn, $username, $password);

// user テーブルの中身を出力
$statement = $pdo->query("SELECT * FROM user");

while ($row = $statement->fetch()) {
  echo "- id: " . $row["id"] . ", name: " . $row["name"] . PHP_EOL;
}

$pdo = null;

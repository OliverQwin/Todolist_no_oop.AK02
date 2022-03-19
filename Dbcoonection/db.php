<?php

$Host = "localhost";
$Root = "root";
$Password = "";
$Table_names = "work14-16(no oop)";

try {
  $connect = new PDO(
    "mysql:host=$Host;dbname=$Table_names",
    $Root,
    $Password
  );
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Проблеми зі з'єднанням до БД" . $e->getMessage();
}

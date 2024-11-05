<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'cinema';

$sambungan = mysqli_connect($host,$user,$password,$database)or die('Sambungan ke MYSQL gagal');
?>
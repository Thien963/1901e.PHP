<?php
// khởi động session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Tạo session trong PHP </h1>

<?php
//$_SESSION là 1 mảng
$_SESSION['user_name'] = 'admin';
$_SESSION['user_email'] = 'admin@gmail.com';

$location = "ha noi";

$_SESSION["user_location"] = $location;

//Xem tất cả các sesion đang hoạt động
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
</body>


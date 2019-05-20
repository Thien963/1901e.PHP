<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Biến trong PHP : lưu trữ thông tin và thay đổi trong quá trình chạy</h1>

<pre>
    Khai báo biến trong PHP như thế nào?
    $tên_biến;
    Biến trong php thì ko cần từ khóa var giống JS
    và phải bắt đầu bằng $ tiếp theo là tên biến
    Tên biến phải viết liền, không dùng tiếng việt có dấu
    Không dùng các ký tự đặc biệt như @ ...
    tên biến chỉ chứa các số và chữ cái A đến Z và ký tự _
    tên biến có phân biệt hoa thường VD: $a khác $A
    trong js nối chuỗi bằng +
    trong php nối chuỗi bằng .
</pre>

<?php
$a = 5;
$b = 7;
$c = $a + $b;
echo '$c: ' . $c;
?>
</body>
</html>

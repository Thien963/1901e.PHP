<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>mảng đa chiều chính là mảng lồng mảng</h1>

<h1>mảng 2 chiều</h1>
<?php
/*$class9a = array("an", "hương", "sơn", "linh");
$class9b = array("an1", "hương1", "sơn1", "linh1");
$class9c = array("an2", "hương2", "sơn2", "linh2");
$class9d = array("an3", "hương3", "sơn3", "linh3");

$dinhtienhoang = array($class9a,$class9b,$class9c,$class9d);

echo "<pre>";
print_r($dinhtienhoang);
echo "</pre>"
*/
$class9a = array(
    "name_class" => "9A",
    "studnets" => array("an", "hương", "sơn", "linh")
);
$class9b = array(
    "name_class" => "9B",
    "studnets" => array("an1", "hương1", "sơn1", "linh1")
);

$dinhtienhoang = array($class9a, $class9b);

echo"<pre>";
print_r($dinhtienhoang);
echo "</pre>";

if(is_array($dinhtienhoang) && !empty($dinhtienhoang)){
    foreach ($dinhtienhoang as $key_class => $class){
        echo "<br> -".$class["name_class"];
         if(is_array($class["students"]) && !empty($class["students"])) {
            foreach($class["students"] as $key_student => $student) {
                echo "<br> -- " . $student;
            }
         }
    }
}
?>
</body>
</html>
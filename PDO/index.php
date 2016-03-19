<!doctype HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
<a href="add.html">添加数据</a>
<table border="1">
    <tr><th>ID</th><th>姓名</th><th>年龄</th><th>修改/删除</th></tr>

<?php
require_once 'connectDB.php';
$conn = connectDB();
//$result = $conn -> query('SELECT * FROM USER; ');
//$count = $result -> rowCount();
//for($i = 0;$i<$count;$i++) {
//    $arr = $result -> fetch(PDO::FETCH_ASSOC);
//    $id = $arr['ID'];
//    $name = $arr['NAME'];
//    $age = $arr['AGE'];
//    echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edit.php?id=$id'>修改</a> <a href='delete.php?id=$id'>删除</a></td> </tr>";
//}
foreach($conn -> query('SELECT * FROM USER') as $arr){
    echo "<tr><td>{$arr['ID']}</td><td>{$arr['NAME']}</td><td>{$arr['AGE']}</td><td><a href='edit.php?id={$arr['ID']}'>修改</a> <a href='delete.php?id={$arr['ID']}'>删除</a></td>></tr>";
}

?>
</table>

</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改数据</title>
</head>
<body>
<form action="editok.php" method="post">
    <table>
        <tr><th>ID</th><th>姓名</th><th>年龄</th></tr>
        <?php
        /**
         * Created by PhpStorm.
         * User: h9549
         * Date: 2016/2/1
         * Time: 16:24
         */
        require_once 'connectDB.php';
        $id = intval($_GET['id']);
        $conn = connectDB();
        $result = $conn ->query("SELECT * FROM USER WHERE ID = $id");
        $arr = $result ->fetch(PDO::FETCH_ASSOC);
        $name = $arr['NAME'];
        $age = $arr['AGE'];
         ?>
        <tr>
            <td><input type="text" name="id" value="<?php echo $id?>"></td>
            <td><input type="text" name="name" value="<?php echo $name?>"></td>
            <td><input type="text" name="age" value="<?php echo $age?>"></td>
        </tr>
        <tr><td><input type="submit" value="提交修改"></td> </tr>
    </table>
</form>
</body>
</html>

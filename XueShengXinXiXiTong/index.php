<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生信息管理系统</title>
    <link href="css/css.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" >
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/jquery-2.2.1.js'></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script>
        function doDel(id){
            if(confirm("确定要删除学号是"+id+"的信息吗?")){
                window.location = "control.php?c=del&id="+id;
            }
        }
    </script>
</head>

<body>

<?php
@session_start();
if(isset($_SESSION['name']) && $_SESSION['name']!='') {
    ?>
    <?php include 'memu.php'; ?>


    <div class="stu_table table-responsive">
    <table class="table table-striped">
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>性别</th>
            <th>班级</th>
            <th>操作</th>
        </tr>
<!--    </table>-->
<!---->
<!--    <table class="table table-striped">-->
        <?php
        require_once 'connDB.php';
        $year = Date('Y');
        $conn = connDB();
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $search = $_POST['search'];
            $sql = "SELECT * FROM students WHERE id='{$search}' OR name='{$search}'";
            $conn->query("SET NAMES 'utf8'");
            $result = $conn->query($sql);
            if ($result->rowCount() > 0) {
                foreach ($result as $arr) {
                    $age = $year - $arr['age'];
                    echo "<tr >
                           <td>{$arr['id']}</td><td>{$arr['name']}</td><td>{$age}</td><td>{$arr['sex']}</td><td>{$arr['classid']}</td>
                           <td  style=\"\"><a href='edit.php?id={$arr['id']}'>修改</a>/<a href='javascript:doDel({$arr['id']})'>删除</a> </td>
                       </tr>";
                }
            } else {
                echo "<script>alert('查询结果为空！');window.history.back();</script>";
            }
        } else include 'tableStudents.php';
        ?>


    </table>


    <?php
}else{
    echo "<script>alert('请登录！');window.location='index.html';</script>";
}
    ?>

</div>

<?php include 'footer.html'; ?>
</body>
</html>


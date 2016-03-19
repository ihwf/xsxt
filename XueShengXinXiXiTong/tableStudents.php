


    <script>
        function doDel(id){
            if(confirm("确定要删除学号是"+id+"的信息吗?")){
                window.location = "control.php?c=del&id="+id;
            }
        }
    </script>

<?php
if(isset($_SESSION['name']) && $_SESSION['name']!='') {
?>

    <?php
    /**
     * Created by PhpStorm.
     * User: h9549
     * Date: 2016/2/3
     * Time: 16:19
     */


    require_once 'connDB.php';
    $year = Date('Y');
    $conn = connDB();
    $conn -> query("SET NAMES 'utf8'");
    foreach($conn -> query('SELECT * FROM students ORDER BY id') as $arr){
        $age = $year-$arr['age'];
        echo " <tr align='center'>
                <td>{$arr['id']}</td>
                <td>{$arr['name']}</td>
                <td>{$age}</td>
                <td>{$arr['sex']}</td>
                <td>{$arr['classid']}</td>
                <td><a href='edit.php?id={$arr['id']}'>修改</a>/<a href='javascript:doDel({$arr['id']})'>删除</a> </td>
                </tr>";

    }
    ?>

    <?php
}else{
    echo "<script>alert('请登录！');window.location='index.html';</script>";
}
?>


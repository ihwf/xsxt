<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改学生信息</title>
    <link href="css/css.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='js/jquery-2.2.1.js'></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

    <?php
    @session_start();
    if(isset($_SESSION['name']) && $_SESSION['name']!='') {
        ?>

        <?php include 'memu.php';?>

        <?php
        require_once 'connDB.php';
        $conn = connDB();
        $conn -> query("SET NAMES 'utf8'");
        $id = $_GET['id'];
        $sql = "SELECT * FROM students WHERE id=$id";
        $arr = $conn -> query($sql);
        $stu = $arr -> fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="add_table table-responsive">
            <form action="control.php?c=edit" method="post" class="form-horizontal">
                <input type="hidden" name="id" value="<?php echo $id;?>">

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">姓名</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" placeholder="请输入学生姓名" value="<?php echo $stu['name'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-3 control-label">出生年份</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="age" placeholder="请输入学生出生年份" value="<?php echo $stu['age']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">性别</label>
                    <div class="col-sm-9">
                        <div class="radio">
                            <label>
                                <input type="radio" name="sex" value="男" <?php echo ($stu['sex'] == "男") ? "checked" : "" ?>>男
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="sex" value="女" <?php echo ($stu['sex'] == "女") ? "checked" : "" ?>>女
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="classid" class="col-sm-3 control-label">班级</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="classid" placeholder="请输入学生班级" value="<?php echo $stu['classid']?>">
                    </div>
                </div>
                <div class="form-group">
                    <div  class="col-sm-push-12 col-xs-offset-3">
                        <button type="submit" class="btn btn-default">确定修改</button>
                        &ensp;
                        <button type="reset" class="btn btn-warning" >重新输入</button>
                    </div>
                </div>
            </form>
        </div>

<!--        <table>-->
<!--            <tr>-->
<!--                <td>姓名：</td>-->
<!--                <td><input type="text" name="name" placeholder="请输入学生姓名" value="--><?php //echo $stu['name'];?><!--"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>出生年份：</td>-->
<!--                <td><input type="text" name="age" placeholder="请输入学生出生年份" value="--><?php //echo $stu['age']?><!--"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>性别：</td>-->
<!--                <td align="center">-->
<!--                    <label><input type="radio" name="sex" value="男" --><?php //echo ($stu['sex'] == "男") ? "checked" : "" ?><!--男</label>&nbsp-->
<!--                    <label><input type="radio" name="sex" value="女" --><?php //echo ($stu['sex'] == "女") ? "checked" : "" ?><!--女</label>-->
<!--                </td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>班级：</td>-->
<!--                <td><input type="text" name="classid" placeholder="请输入学生班级" value="--><?php //echo $stu['classid']?><!--"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td colspan="2" align="center">-->
<!--                    <input type="submit" value="确定修改" class="btn-danger">&nbsp-->
<!--                    <input type="reset" value="重新输入" class="btn-success">-->
<!--                </td>-->
<!--            </tr>-->
<!--        </table>-->
<!--        </form>-->



        <?php include 'footer.html';?>
        <?php
    }else{
        echo "<script>alert('请登录！');window.location='index.html';</script>";
    }
    ?>
</div>
</body>
</html>

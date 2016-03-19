<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加学生</title>
    <link href="css/css.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/js.js"></script>
     <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/jquery-2.2.1.js'></script>
</head>
<body>
<div class="container">
    <?php
    @session_start();
    if(isset($_SESSION['name']) && $_SESSION['name']!='') {
    ?>
    <?php include 'memu.php';?>
    <div class="add_table table-responsive">
    <form action="control.php?c=add" method="post" id="addform" class="form-horizontal" onkeydown="javascript:if (event.keyCode == 13){return check3();}">
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">姓名</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="name" placeholder="请输入学生姓名">
            </div>
        </div>
        <div class="form-group">
            <label for="age" class="col-sm-3 control-label">出生年份</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="age" id="age" placeholder="请输入学生出生年份">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">性别</label>
            <div class="col-sm-9">
                <div class="radio">
                    <label>
                        <input type="radio" name="sex" id="sex1" value="男">男
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="sex" id="sex2" value="女">女
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="classid" class="col-sm-3 control-label">班级</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="classid" id="classid" placeholder="请输入学生班级">
            </div>
        </div>
        <div class="form-group">
            <div  class="col-sm-push-12 col-xs-offset-3">
                <button type="button" class="btn btn-default" onclick="check3()">确定添加</button>
            &ensp;
                <button type="reset" class="btn btn-warning" >重新输入</button>
            </div>
        </div>
    </form>

<!--        <table>-->
<!--            <tr>-->
<!--                <td>姓名：</td>-->
<!--                <td><input type="text" name="name" id="name" placeholder="请输入学生姓名"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>出生年份：</td>-->
<!--                <td><input type="text" name="age" id="age" placeholder="请输入学生出生年份"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>性别：</td>-->
<!--                <td align="center">-->
<!--                    <label><input type="radio" name="sex" id="sex1" value="男">男</label>&nbsp-->
<!--                    <label><input type="radio" name="sex" id="sex2" value="女">女</label>-->
<!--                </td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>班级：</td>-->
<!--                <td><input type="text" name="classid" id="classid" placeholder="请输入学生班级"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td colspan="2" align="center">-->
<!--                    <button type="button" class="btn-success" onclick="check3()">确定添加</button>&nbsp&nbsp-->
<!--                    <button type="reset"  class="btn-warning">重新输入</button>-->
<!--                </td>-->
<!--            </tr>-->
<!--        </table>-->
<!--    </form>-->
    </div>

<?php include 'footer.html';?>
<?php
}else{
    echo "<script>alert('请登录！');window.location='index.html';</script>";
}
?>
</div>
</body>
</html>
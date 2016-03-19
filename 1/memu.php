<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/jquery-2.2.1.js'></script>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">学生管理系统</span>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">浏览学生 <span class="sr-only">(current)</span></a></li>
                <li><a href="add.php">添加学生</a></li>
            </ul>

            <form class="navbar-form navbar-left" role="search" action="index.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="输入学号或姓名搜索学生" name="search">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a>
                    <?php
                    echo "欢迎你，{$_SESSION['name']}";
                    ?></a>
                </li>
                <li>
                <a href="session_distroy.php">退出</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>   
</body>
</html>

<!---->
<!--    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">-->



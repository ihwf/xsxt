<?php
/**
 * Created by PhpStorm.
 * User: h9549
 * Date: 2016/2/3
 * Time: 17:47
 */

require_once 'connDB.php';
$conn = connDB();
$conn -> exec("SET NAMES 'utf8'");

switch($_GET['c']){
    case "add":
        $name = $_POST['name'];
        $age = intval($_POST['age']);
        $sex = $_POST['sex'];
        $classid = $_POST['classid'];
        $sql = "INSERT INTO students(name,age,sex,classid) VALUE ('$name',$age,'$sex','$classid')";
        $result = $conn -> exec($sql);
        if($result>0){
            echo "<script>alert('添加成功！');window.location='index.php';</script>";
        }else{
            echo "<script>alert('添加失败！请重试！');window.history.back();</script>";
        }
    break;

    case "del":
        $id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id={$id}";
        $result = $conn -> exec($sql);
        if($result>0){
            echo "<script>alert('删除成功！');window.location='index.php';</script>";
        }else{
            echo "<script>alert('删除失败！请重试！');window.history.back();</script>";
        }
        break;

    case "edit":
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = intval($_POST['age']);
        $sex = $_POST['sex'];
        $classid = $_POST['classid'];
        $sql = "UPDATE students SET name='$name',age={$age},sex='{$sex}',classid='{$classid}' WHERE id = {$id}";
        $result = $conn -> exec($sql);
        if($result>0){
            echo "<script>alert('修改成功！');window.location='index.php';</script>";
        }else{
            echo "<script>alert('修改失败！请重试！');window.history.back();</script>";
        }
        break;

    case "dl":
        if(isset($_POST['duser']) && $_POST['duser']!=""){
            $user = $_POST['duser'];
            $psw = md5($_POST['dpassword']);
            $sql = "SELECT * FROM users WHERE name='{$user}' and psw='{$psw}'";
            $result = $conn -> query($sql);
            if($result -> rowCount() > 0){
                session_start();
                $_SESSION['name']=$user;
                echo "<script>alert('{$user}，欢迎回来！');window.location='index.php';</script>";
            }else{
                echo "<script>alert('用户名或者密码错误！请重试！');window.history.back();</script>";
            }
        }
    break;

    case "zc":
        $user = $_POST['user'];
        $psw = md5($_POST['password']);
        $phone = intval($_POST['a_phone']);
        $email = $_POST['a_email'];
        $sql = "SELECT * FROM users WHERE name='{$user}'";
        $result = $conn -> query($sql);
        if($result -> rowCount() > 0){
            echo "<script>alert('用户名已存在！请重新输入！');window.history.back();</script>";
        }else{
            $sql = "INSERT INTO users(name,psw,phone,email) VALUE ('{$user}','{$psw}',$phone,'{$email}')";
            $result = $conn -> exec($sql);
            if($result>0){
                echo "<script>alert('注册成功！请登录！');window.location='index.html';</script>";
            }else{
                echo "<script>alert('注册失败！请重试！');window.history.back();</script>";
            }
        }
        break;

//    case "bgimg":
//        $_GET['idx'] = '';
//        if($_GET['idx']==null){
//            $str=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');
//
//        }
//
//        $str=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx='.$_GET['idx'].'&n=1');
//        if(preg_match("/<url>(.+?)<\/url>/ies",$str,$matches)){
//            $imgurl='http://cn.bing.com'.$matches[1];
//            readfile($imgurl);
//        }
//        if($imgurl){
//            header('Content-Type: image/JPEG');
//            @ob_end_clean();
//            @readfile($imgurl);
//            @flush(); @ob_flush();
//            exit();
//        }else{
//            exit('error');
//        }
//        break;


}
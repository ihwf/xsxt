<?php
/**
 * Created by PhpStorm.
 * User: h9549
 * Date: 2016/2/1
 * Time: 15:55
 */
if(!isset($_POST['name'])||!isset($_POST['age'])){
    die('name or age is not found');
}else{
    require_once 'connectDB.php';
    $conn = connectDB();
    $conn -> exec("INSERT INTO USER(NAME ,AGE) VALUES('{$_POST['name']}',{$_POST['age']})");
    header('location:index.php');

}

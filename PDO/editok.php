<?php
/**
 * Created by PhpStorm.
 * User: h9549
 * Date: 2016/2/1
 * Time: 16:33
 */

if(!isset($_POST['name'])||!isset($_POST['age'])){
    die('name or age is not found');
}else{
    require_once 'connectDB.php';
    $id= intval($_POST['id']);
    $name = $_POST['name'];
    $age = intval($_POST['age']);
    $conn = connectDB();
    $result = $conn -> exec("UPDATE USER SET NAME = '$name',AGE = $age WHERE ID = $id");
    header('location:index.php');

}

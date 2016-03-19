<?php
/**
 * Created by PhpStorm.
 * User: h9549
 * Date: 2016/2/1
 * Time: 17:02
 */
require_once 'connectDB.php';
$conn = connectDB();
$id = intval($_GET['id']);
$result = $conn -> exec("DELETE FROM USER WHERE ID = $id");
header('location:index.php');
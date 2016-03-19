<?php
/**
 * Created by PhpStorm.
 * User: h9549
 * Date: 2016/2/3
 * Time: 16:41
 */

function connDB(){
    try {
        //$conn = new PDO("mysql:host=localhost;dbname=students", "root", "");
        $conn = new PDO("mysql:host=w.rdc.sae.sina.com.cn;port=3307;dbname=app_ihwf","nlozyml01n","4hh34425323z24lzilzxyz0ixw1i52jxmzlw2i1m");
        return $conn;
    }catch(PDOException $e) {
        echo "fail to connect database".$e->getMessage();
    }
}
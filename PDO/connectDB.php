<?php
/**
 * Created by PhpStorm.
 * User: h9549
 * Date: 2016/2/1
 * Time: 14:45
 */
function connectDB(){
//    $conn = new mysqli('localhost','root','','test');//使用正常的MYSQL时用这个并将其他网页的runsql改为query
    //$conn = new mysqli('w.rdc.sae.sina.com.cn'.':'.'3307','nlozyml01n','4hh34425323z24lzilzxyz0ixw1i52jxmzlw2i1m', 'app_ihwf');
  
//$conn = new PDO("mysql:host=w.rdc.sae.sina.com.cn;port=3307;dbname=app_ihwf","nlozyml01n","4hh34425323z24lzilzxyz0ixw1i52jxmzlw2i1m");
 $conn = new PDO("mysql:host=localhost;dbname=test","root","");
 return $conn;//new SaeMysql();//使用正常的MYSQL时，此处改为return $conn;
}
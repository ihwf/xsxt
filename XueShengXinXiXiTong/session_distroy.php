<?php
/**
 * Created by PhpStorm.
 * User: h9549
 * Date: 2016/2/12
 * Time: 16:25
 */

session_start();

if(session_destroy()){
    echo "<script>alert('成功退出！');window.location='index.html';</script>";
}else{
    echo "<script>alert('退出失败！请重试！');window.location='index.html</script>";
}
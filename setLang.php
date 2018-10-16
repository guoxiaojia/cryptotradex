<?php
/**
 * Created by PhpStorm.
 * User: ZRothschild
 * Date: 2018/8/2
 * Time: 10:37
 */

if(!isset($_SESSION)){
    session_start();
}
$_SESSION['lang'] = 'en';
if (!empty($_POST['lang'])) $_SESSION['lang'] = $_POST['lang'];
$data = ['lang'=> $_SESSION['lang'],'status'=>1];
echo json_encode($data);


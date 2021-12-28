<?php
$action=isset($_GET['action'])?$_GET['action']:'index';
$user=new usermodel();
if($action=='index')
{
	$data=$user->all();
	include './views/user/user.php';
}

?>
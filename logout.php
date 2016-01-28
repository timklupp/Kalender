<?php
session_start();
if(!empty($_SESSION['id']))
{
$_SESSION['id']='';
session_destroy();
}
header("Location: http://79.170.44.118/timklupp.com/calendar/");
?>

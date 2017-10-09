<?php
session_start();
if($_SESSION['id'] !=0)
{
  $_SESSION['id']=0;
  session_destroy();
}
header('Location: ./index.php');
?>

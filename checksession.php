<?php
if(!isset($_SESSION['loginID']) && !isset($_SESSION['password']))
{
header('location:index.php');
exit();
}
?>
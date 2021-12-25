<?php
session_start();
session_destroy();
header('Location:../tai-khoan/login.php');
 ?>
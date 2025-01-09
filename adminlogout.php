<?php
session_start();
unset($_SESSION['adminid']);
echo "<script>window.location='index.php';</script>";
?>
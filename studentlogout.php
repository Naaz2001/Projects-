<?php
session_start();
unset($_SESSION['studentid']);
echo "<script>window.location='index.php';</script>";
?>
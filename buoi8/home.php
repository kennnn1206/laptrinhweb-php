<?php
session_start();
require_once('loginconnect.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['username'];
?>
<p>Xin chào <span><?= htmlspecialchars($_SESSION['username']); ?></span></p>
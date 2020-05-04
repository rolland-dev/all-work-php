<?php
session_start();

$_SESSION['connected'] = 'no'; 
unset($_SESSION['email']); 
header('Location: index.php');
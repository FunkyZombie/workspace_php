<?php
require_once 'model/User.php';

session_start();
$pageHeader = 'Home';
$username = null;

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
}

include "view/index.php";

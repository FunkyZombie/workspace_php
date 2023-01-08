<?php
require_once 'model/User.php';

session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

$pageHeader = 'Home';

$username = null;

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    header('Location: /?controller=security&action=logout');
}

include "view/index.php";

<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();
$pdo = require 'db.php';

$error = null;

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;

    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['username'] = $user;
        $_SESSION['userId'] = $user->getId();
        header("Location: index.php");
        die();
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    unset($_SESSION['userId']);
    header('Location: /');
    session_destroy();
}

include "view/signin.php";
<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();
$pdo = require 'db.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
  ['username' => $username, 'password' => $password] = $_POST;

  $user = new User($username);

  $userProvider = new UserProvider($pdo);
  try {
      $user->setId($userProvider->registerUser($user, $password));

      $_SESSION['username'] = $user;
      $_SESSION['userId'] = $user->getId();
      header("Location: index.php");
      die();
  } catch (error) {
      $error = 'Логин занят';
  }
}

include "view/signup.php";
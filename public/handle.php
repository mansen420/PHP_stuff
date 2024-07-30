<?php
  $req_type = strtoupper($_SERVER['REQUEST_METHOD']);
  if($req_type === 'POST')
  {
    session_start();
    $_SESSION['post_data'] = htmlspecialchars($_POST['foo_input']);
    unset($_POST);
    $_SESSION['post_data'] = filter_var(filter_var($_SESSION['post_data'], FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
    if($_SESSION['post_data'] === false)
    {
      unset($_SESSION['post_data']);
      $_SESSION['input_err'] = 'Must be a valid email!';
      header("Location: http://{$_SERVER['HTTP_HOST']}/hello.php", true, 301);
      exit;
    }
    header("Location: http://{$_SERVER['HTTP_HOST']}/welcome.php", true, 301);
    exit;
  }
  else
  {
    header("Location: http://{$_SERVER['HTTP_HOST']}/hello.php", true, 301);
    exit;
  }
?>
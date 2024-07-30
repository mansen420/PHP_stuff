<?php 
  session_start();
  $PAGE_TITLE = 'Hello!';
  require_once 'header.php'
?>
  <?php
    $current_uri = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  ?>
  <?php if(empty($_SESSION['post_data'])): ?>
    <h1>Welcome to the World Wide Web.</h1>
    <p>You are in <i><?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?> </i> </p>
    <form action="handle.php" method ="post" >
      <label for="foo_id">EMAIL</label>
      <input type="text" value="" name="foo_input" id = "foo_id" placeholder="you@example.com">
      <small style="color:crimson"><? echo $_SESSION['input_err']?? "" ?></small>
      <br>
      <button type="submit" >SUBMIT DATA</button>
    </form>
  <?php else : ?>
    <h3>Welcome Back to <? echo $current_uri ?>.</h3>
    <p>You were the one who typed  <? echo $_SESSION['post_data'] ?>, weren't you?</p>
    <small>We remember...</small>
    <? session_unset(); ?>
  <?php endif ?>

<? require_once 'footer.php' ?>
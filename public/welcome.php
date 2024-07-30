<? 
session_start(); 

if(!key_exists('post_data', $_SESSION))
{
    header("Location: http://{$_SERVER['HTTP_HOST']}/hello.php", true, 301);
    exit;
}

$PAGE_TITLE = 'Welcome';
require_once 'header.php' 
?>

<h3>Welcome, dear user.</h3>
<p>The machines have verified your email : <? echo $_SESSION['post_data'] ?> </p>
<p>The vast web is your oyster.</p>

<? require_once 'footer.php' ?>
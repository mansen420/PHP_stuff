<?php
    require_once 'config.php';
    try 
    {
        $pdo = new PDO($dsn, $username, $password);

        if($pdo)
        {
            header("Location: http://{$_SERVER['HTTP_HOST']}/hello.php", true, 301);
            exit;
        }
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        header($_SERVER['SERVER_PROTOCOL'] . '404 not found');
        exit;
    }
?>

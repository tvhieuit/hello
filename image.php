<?php
    $configs = include('conf.php');
    $url = $configs["host"].'/'.$_GET['type'].'/'.$_GET['name'];
     header('Location: ' . $url);
?>

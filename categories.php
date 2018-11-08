
<?php
    $configs = include('conf.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $curlSession = curl_init();
        curl_setopt($curlSession, CURLOPT_URL, $configs["host"].'/scripts/get_categories.php');
        curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
        $jsonData = curl_exec($curlSession);
        curl_close($curlSession);
        echo $jsonData;
    } else {
        echo '[]';
    }

?>

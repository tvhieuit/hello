
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $myvars = 'sort=random&cat='.$_POST["cat"];
        $curlSession = curl_init();
        curl_setopt($curlSession, CURLOPT_URL, 'http://mrdroidstudiosfootball.xyz/data/scripts/get_info.php');
        curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlSession, CURLOPT_POST, 1);
        curl_setopt( $curlSession, CURLOPT_POSTFIELDS, $myvars);
        curl_setopt( $curlSession, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $curlSession, CURLOPT_HEADER, 0);
        curl_setopt( $curlSession, CURLOPT_RETURNTRANSFER, 1);
        $jsonData = curl_exec($curlSession);
        curl_close($curlSession);
        echo $jsonData;
    } else {
        echo '[]';
    }

?>

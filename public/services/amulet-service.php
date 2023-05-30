<?php
function getAmulet($keyword)
{
    $curl = curl_init();
    $encodedUrl = urlencode($keyword);
    $url = "https://api-amulate.onrender.com/api/Amulet?keyword=" . $encodedUrl;
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return json_decode($response, true);
}

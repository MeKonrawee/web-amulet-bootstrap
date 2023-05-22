<?php
function getHistory($keyword)
{
    echo $keyword;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api-amulate.onrender.com/api/history?keyword=" . $keyword);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if (curl_error($ch)) {
        echo 'Error: ' . curl_error($ch);
        exit;
    }
    curl_close($ch);
    return json_decode($response, true);
}

function getHistoryV2($keyword)
{
    $curl = curl_init();
    $encodedUrl = urlencode($keyword);
    $url = "https://api-amulate.onrender.com/api/history?keyword=" . $encodedUrl;
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

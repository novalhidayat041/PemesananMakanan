<?php

$id = $_GET["id"];


$data = array(
    "id" => $id,
);

$post_data = json_encode($data);

// set url 
curl_setopt($ch, CURLOPT_URL, "http://localhost/pemesananMakananApi/delete.php?");

$ch = curl_init();
curl_setopt($crl, CURLOPT_URL, $url);
curl_setopt($crl, CURLOPT_HTTPHEADER, array('content-Type: application/json'));
curl_setopt($crl, CURLOPT_POST, 1);
curl_setopt($crl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($crl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-wwww-form-urlencoded'
));

$result = curl_exec($crl);

curl_close($crl);

print_r($result);

header('location: produk.php');
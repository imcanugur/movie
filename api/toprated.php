<?php
$ctop = curl_init();
curl_setopt($ctop, CURLOPT_URL, "http://api.themoviedb.org/3/".$channel."/top_rated?api_key=".$apikey."&language=".$language."&page=1");
curl_setopt($ctop, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ctop, CURLOPT_HEADER, FALSE);
curl_setopt($ctop, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response = curl_exec($ctop);
curl_close($ctop);
$toprated = json_decode($response);
?>
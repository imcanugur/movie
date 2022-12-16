<?php

$cmovie = curl_init();
curl_setopt($cmovie, CURLOPT_URL, "http://api.themoviedb.org/3/movie/".$id."?api_key=".$apikey."&language=".$language."&page=1");
curl_setopt($cmovie, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cmovie, CURLOPT_HEADER, FALSE);
curl_setopt($cmovie, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response = curl_exec($cmovie);
curl_close($cmovie);
$movie_id = json_decode($response);

?>
<?php
    $csearch = curl_init();
    curl_setopt($csearch, CURLOPT_URL, "http://api.themoviedb.org/3/search/".$channel."?api_key=".$apikey."&query=".$query."&page=1"."&language=".$language);
    curl_setopt($csearch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($csearch, CURLOPT_HEADER, FALSE);
    curl_setopt($csearch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
    $response = curl_exec($csearch);
    curl_close($csearch);
    $search = json_decode($response);
?>
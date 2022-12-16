<?php 
    $query = $_GET['search'];
    require_once("config.php");
    include_once("api/config.php");
    include("includes/header.php");
    include_once("api/search.php");
?>



<?php
    foreach($search->results as $result){

        $release = $result->release_date;
        if (!empty($release) && !is_null($release)){
            $tempyear = explode("-", $release);
            $year = $tempyear[0];
            if (!is_null($year)){
            }
        }
        echo '<div class="column2">
            <div class="row2">
                    <a href="movie-detail.php?id='.$result->id. '"><img src="'.$imgurl.$result->poster_path. '" width="200" height="180"  ></a>' . '<h4><span>'.$result->title. "</h4>
            </div>
            </div>";
    }
    /*
    $movies = $connection->query("SELECT * FROM movies WHERE title LIKE %$query% ");
    if($movies->rowCount()){
        foreach($movies as $movie){
            echo 'ss';
        }
    }*/
?>

<hr><center><h6>Sizlerden gelen kayıtlar...</h6></center><hr>
<?php
    $movies = $connection->query("SELECT * FROM movies WHERE title LIKE '%$query%' ");
    
    // Eğer sonuç bulunduysa...
    if ($movies->rowCount() > 0) {
        foreach($movies as $movie){
            echo '<div class="column2">
            <div class="row2">
                    <a href="my-movie-detail.php?id='.$movie['id'].'"><img src="'.'buraya'.'" width="200" height="180"></a>' . '<h4><span>'.$movie['title']."</h4>
            </div>
            </div>";
        }
    }
    else{
        echo "Aradığınız değerde veri bulunamadı.";
    }
?>








<hr><center><h6><a href="new-movie.php">Aradığınızı Bulamadınız mı?</a></h6></center><hr>
<?php
    include("includes/footer.php");     
?>
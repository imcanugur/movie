<?php 
require_once("config.php");
include("includes/header.php");
include_once "api/config.php";
include_once "api/toprated.php";

?>

<center><h3> TMDB(The Movie DB) Göre En Fazla Oy Alan Filmler </h3></center><hr>
<?php     
    foreach($toprated->results as $result){
      echo '<div>
                <div>
                    <img src="'.$imgurl.$result->poster_path.'" width="140" height="180"><h4><span>'.$result->title." (".$result->original_title.") "." (" . substr($result->release_date, 0, 4) .")</h4><h5><span>"."Puan : ".$result->vote_average." | Oy : ".$result->vote_count." | Popülerlik : ".round($result->popularity)."</h5><a href=movie-detail.php?id=".$result->id.">Devamı</a></h6><span></h6>
                </div>
            </div>";
             
    }
?>

<hr><center><h6><a href="new-movie.php">Aradığınızı Bulamadınız mı?</a></h6></center><hr>
<?php    
include("includes/footer.php"); 
?>

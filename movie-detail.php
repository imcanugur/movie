<?php 
    $id = $_GET['id'];
    require_once("config.php");
    include_once("api/config.php");
    include("includes/header.php");
    include_once("api/movie_detail.php");
    $user_id = 10;
?>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="ispis">
    <img id= "image" src="<?php echo $imgurl.$movie_id->poster_path ?>">
    <p>İsim: <?php echo $movie_id->title." (".$movie_id->original_title.")" ?></p>
    <p id="tagline">Slogan : <?php echo $movie_id->tagline ?></p>
    <p>Kategori : 
        <?php
          foreach($movie_id->genres as $genre){
            echo '<span>' . $genre->name . '</span> ';
          }
        ?>
    </p>
    <p>Özet: <?php echo $movie_id->overview ?></p>
    <p>Gösterim: <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?>
    <p>Yapım:
        <?php
          foreach($movie_id->production_companies as $production_companie){
            echo $production_companie->name.", ";
          }
        ?>
    </p>
    <p>Ülke:<?php foreach($movie_id->production_countries as $production_countrie){echo $production_countrie->name. "&nbsp;&nbsp;" ;} ?>
          </p>
          <p>Bütçe: $ <?php echo $movie_id->budget ?> </p>
          <!--<p>Oy Ortalamsı: </p>
          <p>Oy Sayısı: </p>-->
          <p>Oy Ortalamsı(TMDB): <?php echo $movie_id->vote_average ?></p>
          <p>Oy Sayısı(TMDB): <?php echo $movie_id->vote_count ?></p>
</div>    


    <form action="" method="POST">
        <input type="text" value="<?= $id ?>" name="movie_id" hidden>
        <input type="text" value="<?= $user_id ?>" name="user_id" hidden>
        <label>Oylama: </label>   
        <span class="star-rating">
            <input type="radio" name="rate" value="1">
            <i></i>
            <input type="radio" name="rate" value="2">
            <i></i>
            <input type="radio" name="rate" value="3">
            <i></i>
            <input type="radio" name="rate" value="4">
            <i></i>
            <input type="radio" name="rate" value="5"required>
            <i></i> 
        </span><br>
        <button class="btn btn-primary" type="submit">Oyla</button>
    </form>

<?php
if ($_POST){
  $rate_post = $connection->prepare('INSERT INTO movies_rate SET movie_id=:movie_id, user_id=:user_id, rate=:rate, source=:source');
  $insert = $rate_post->execute(array(
      'movie_id' => htmlspecialchars($_POST['movie_id']),
      'user_id' => htmlspecialchars($_POST['user_id']),
      'rate' => htmlspecialchars($_POST['rate']),
      'source' => 'tmdb',
  ));

  if ($insert) {
      echo "<script>Swal.fire('', 'Oylama işlemi başarıyla gerçekleştirildi', 'success')</script>";
  }
  else
  {
      echo "<script>Swal.fire('', 'Oylama işlemi gerçekleştirilirken hata ile karşılaşıldı.', 'Error')</script>";
  }


}?>

<?php
    include("includes/footer.php");     
?>

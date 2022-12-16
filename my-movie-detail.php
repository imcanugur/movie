<?php 
    $id = $_GET['id'];
    require_once("config.php");
    include("includes/header.php");
    $user_id = 10;
?>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="ispis">
<?php
    $movies = $connection->query("SELECT * FROM movies WHERE id='$id' ");
    foreach($movies as $movie){
?>
          <div class="ispis">
          <img src="'.'buraya'.'" width="200" height="180">
          <p>İsim: <?php echo $movie['title']; ?></p>
          <p>Özet: <?php echo $movie['overview'];  ?></p>
          <p>Gösterim: <?php echo $movie['overview']; ?>
          <p>Yapım: <?php echo $movie['company']; ?></p>
          <p>Ülke: <?php echo $movie['country']; ?> </p>
          <p>Oy Ortalamsı:  </p>
          <p>Oy Sayısı:  </p>
          </div> 
<?php  
    }
 
?>
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
      'source' => 'mydb',
  ));

  if ($insert) {
      echo "<script>Swal.fire('', 'Oylama işlemi başarıyla gerçekleştirildi', 'success')</script>";
  }
  else
  {
      echo "<script>Swal.fire('', 'Oylama işlemi gerçekleştirilirken hata ile karşılaşıldı.', 'Error')</script>";
  }



    
}
include("includes/footer.php"); 
?>
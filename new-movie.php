<?php 
    require_once("config.php");
    include("includes/header.php");
    $user_id = 10;
?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<form style="margin: 25px;" action="#" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">İsim: </label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" required>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Özet: </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="overview" rows="3" required></textarea>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Ülke: </label>
    <select class="form-control" name="country" id="exampleFormControlSelect1" required>
      <option>Amerika</option>
      <option>Brezilya</option>
      <option>Fransa</option>
      <option>Türkiye</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Yapım: </label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="company" required>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Kategori: </label>
    <select  class="form-control" id="exampleFormControlSelect2" name="category"required>
      <option>Aksiyon</option>
      <option>Drama</option>
      <option>Komedi</option>
      <option>Macera</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Yayın Yılı: </label> 
    <input class="form-control" id="date" name="release_date" type="text"/>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Harcama: </label> 
    <input class="form-control" id="date" name="budget" type="text"/>
  </div><br>
  <button type="submit" class="btn btn-primary" style="width: 100%;">Kaydet</button>
</form>




<?php
if ($_POST){
  $rate_post = $connection->prepare('INSERT INTO movies SET title=:title, user_id=:user_id, overview=:overview, country=:country, company=:company, category=:category, release_date=:release_date, budget=:budget');
  $insert = $rate_post->execute(array(
      'title' => htmlspecialchars($_POST['title']),
      'user_id' => htmlspecialchars($user_id),
      'overview' => htmlspecialchars($_POST['overview']),
      'country' => htmlspecialchars($_POST['country']),
      'company' => htmlspecialchars($_POST['company']),
      'category' => htmlspecialchars($_POST['category']),
      'release_date' => htmlspecialchars($_POST['release_date']),
      'budget' => htmlspecialchars($_POST['budget']),
  ));

  if ($insert) {
      echo "<script>Swal.fire('', 'Film başarıyla eklendi', 'success')</script>";
  }
  else
  {
      echo "<script>Swal.fire('', 'Film eklenirken hata ile karşılaşıldı.', 'Error')</script>";
  }


}?>









<?php
    include("includes/footer.php");     
?>
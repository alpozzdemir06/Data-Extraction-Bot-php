<?php
	require 'class.php';
	$html = file_get_html($_GET['link']);
	$baslik = $html->find(".single-post-header h1",0)->innertext;
	$gorsel = $html->find(".single-post-img img",0)->src;
  

?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Veri Ekleme Ekranı</title>
    <meta name="description" content="">
    <meta name="viewport" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>

  <body>
      <div class="container mt-5">
          <div class="row">
          <div class="col-md-8 m-auto">
          <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Başlık</label>
    <input type="text" class="form-control" value="<?php echo $baslik ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Görsel</label>
    <input type="text" class="form-control" value="<?php echo $gorsel?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      </div>
      </div>
  
  </body>
  
</html>
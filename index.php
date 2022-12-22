



  ___   _     ______   _____  ___________ ________  _________ 
 / _ \ | |    | ___ \ |  _  ||___  /  _  \  ___|  \/  || ___ \
/ /_\ \| |    | |_/ / | | | |   / /| | | | |__ | .  . || |_/ /
|  _  || |    |  __/  | | | |  / / | | | |  __|| |\/| ||    / 
| | | || |____| |     \ \_/ /./ /__| |/ /| |___| |  | || |\ \ 
\_| |_/\_____/\_|      \___/ \_____/___/ \____/\_|  |_/\_| \_|
                                                              
                                                              





<?php
  require 'class.php';

$html = file_get_html('https://refikaninmutfagi.com/tarifler/');


?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Veri Çekme Botu - Alp Özdemir</title>
    <meta name="description" content="">
    <meta name="viewport" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>

      .table-content
      {
        margin-top: 55px;
      }
      
    </style>
  </head>

  <body>
    <div class="container">
    <div class="table-content">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Görsel</th>
      <th scope="col">Başlık</th>
      <th scope="col">Kategori</th>
      <th scope="col">İşlem</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($html->find('.mutfak-yazilari-items li') as $element): ?>
    <tr>
      <th scope="row">
         <a href="<?php echo $element->find("a",0)->href; ?>" target="_blank">         
          <img width"70" src="<?php echo $element->find(".mutfak-yazisi-img img",0)->src; ?>">

      </th>
      <td><?php echo $element->find(".mutfak-yazisi-title",0)->innertext; ?></td>
      <td><?php echo $element->find(".mutfak-yazisi-cat",0)->innertext; ?></td>
      <td>
          <a target="_blank" href="veri-ekle.php?link=<?php echo $element->find("a",0)->href; ?>" class="btn btn-info btn-md text-white">
            EKLE
      </td>
    </tr>
    <?php endforeach ?>
    
  </tbody>
</table>  
    
      </div>
    </div>

    
  </body>
  
</html>
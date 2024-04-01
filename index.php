<?php
  include_once('functions.php')
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Магазин покрышек</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body class="body">
  <div class="head">
    <a href="">
    <img src="./img/orel.jpg" alt="логотип" class="logo">
    </a>
    <p class="naming">Магазин покрышек</p>
    <p class="telephone">Тел. 8-XXX-XXX-XX-XX</p>
    <p class="city">г. Канск</p> 
    
  </div>
  <div class="container-one">


    <ul class="menu">
      <li><a href="">item-1</a>
          <ul>
            <li><a href="">subitem-1</a></li>
            <li><a href="">subitem-2</a></li>
            <li><a href="">subitem-3</a></li>
          </ul>
      </li>
      <li><a href="">item-2</a>
          <ul>
            <li><a href="">subitem-4</a></li>
            <li><a href="">subitem-5</a></li>
            <li><a href="">subitem-6</a></li>
          </ul>
      </li>
    </ul>

    <div class="checkbox">
    <input type="checkbox" id="checkbox_1">
    <label for="checkbox_1" class="checkbox__text">Pure CSS Checkbox</label>

    <form method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="submit" value="Загрузить файл!">
    </form>
    <?php
    // если была произведена отправка формы
    if(isset($_FILES['file'])) {
      // проверяем, можно ли загружать изображение
      $check = can_upload($_FILES['file']);
    
      if($check === true){
        // загружаем изображение на сервер
        make_upload($_FILES['file']);
        echo "<strong>Файл успешно загружен!</strong>";
      }
      else{
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";  
      }
    }
    ?>

    </div>


  </div>
  <div class="container-two">

  </div>
  <div class="container-three">

</div>
<div class="container-four">
  <p class="uslugi__head">Популярные услуги</p>
  <p class="uslugi__text">Выберите нужную вам услугу</p>
  <div class="pop-uslugi">
     <div class="item">1</div>
     <div class="item">1</div>
     <div class="item">1</div>
     <div class="item">1</div>
     <div class="item">1</div>
     <div class="item">1</div>
     <div class="item">1</div>
     <div class="item">1</div>
     <div class="item">1</div>
  </div>
</div>
<div class="container-five">

</div>
</body>
</html>
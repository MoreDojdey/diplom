<link rel="stylesheet" href="assets/css/main.css">

    <form   action="vendor/redup.php" method="post" enctype="multipart/form-data">
       <!--  <div id = "reg"> -->
            <label>название</label>
            <input  type="text" name="name" placeholder="Введите имя">
            <label>количество комнат</label>
            <input  type="text" name="room" placeholder="Введите имя">
            <label>цена</label>
            <input type="text" name="price" placeholder="Введите цену">
            <label>описание</label>
            <input type="text" name="desc" placeholder="Введите описание">
            <label>Изображение</label>
            <input type="file" name="img">
            <label>Площадь</label>
            <input type="text" name="area" placeholder="Введите размер площади">
            <label>Адрес</label>
            <input type="text" name="adress" placeholder="введите адрес">
            <button type="submit">добавить</button>
       <!--  </div> -->
        
    </form>
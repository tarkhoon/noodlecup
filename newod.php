<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <title>NoodleCup</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="/css/fav.png" type="image/png">

    </head>

        <body>
        <div id="newod">

    <div class="row">
        <p id="newod_text">Добавить заказ</p>
        <div class="col">
            
                <form action="order.php" method="post">
                <input type="text" class="make-order" name="name" id="name" placeholder="Имя заказа"><br>
                <input type="text" class="make-order" name="price" id="price" placeholder="Сумма заказа"><br>
                <input type="text" class="make-order" name="comm" id="comm" placeholder="Оставьте комментарий"><br>
                <input type="text" class="make-order" name="photo" id="photo" placeholder="Загрузите фото"><br>
                <input type="text" class="make-order" name="PFD" id="PFD" placeholder="Цена за доставку"><br>
                <button class="btn btn-success">Добавить!</button>
                
                
        </div>

    </div>


</div>

        <?php         require 'sightbar.php'; ?>
        
        </body>

        
</html>
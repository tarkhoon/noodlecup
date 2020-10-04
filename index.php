<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <title>NoodleCup</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="/css/fav.png" type="image/png">

    </head>

        <body>

        <?php



        $mysql = new mysqli('localhost','root','','orders');
        if ($mysql == false){
            print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
        }



        $query = 'SELECT * FROM `orders` WHERE 1';
$result=  mysqli_query ($mysql, $query);
$rows = mysqli_num_rows($result);


for ($i = 0 ; $i < $rows ; ++$i)
{
    $row = mysqli_fetch_row($result);
    echo $row[1];
}



mysqli_free_result($result);

mysqli_close($mysql);



require 'sightbar.php';
        ?>
        
        </body>

        
</html>
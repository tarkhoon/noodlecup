<?php
        $mysql = new mysqli('localhost','root','','orders');
       
        if ($mysql == false){
            print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
        }
        $name = mysqli_real_escape_string($mysql,$_POST['name']);
        $price = mysqli_real_escape_string($mysql,$_POST['price']);
        $comm = mysqli_real_escape_string($mysql,$_POST['comm']);
        $photo = mysqli_real_escape_string($mysql,$_POST['photo']);
        $PFD = mysqli_real_escape_string($mysql,$_POST['PFD']);
        $sql = "INSERT INTO orders (ID, name, user, price, comments, photo, PFD) VALUES 
        (NULL, '$name', NULL, '$price', '$comm','$photo','$PFD')";
        
        
        if (mysqli_query($mysql, $sql)) {
            echo "";
        } else {
        echo "Error: " . $sql. "<br>" . mysqli_error($mysql);
        }
        header('Location: /');

        mysqli_free_result($sql);
        $mysql->close();
        require 'sightbar.php';
        ?>
<?php
      $connect = mysqli_connect('localhost', 'aamagantal', 'Azis62017050105807%', 'myweb_db');
      if (!$connect) {
        echo 'Connection error'. mysqli_connect_error();
      }

      if(mysqli_ping($connect)) {
        echo "connection ok!";
      } else {
        echo "error: " . mysqli_error($connect);
      }
 ?>

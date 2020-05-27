<?php

      $name = $comment = '';
      $errors = array('name' => '', 'comment' => '');

      if(isset($_POST['submit'])) {
        if(empty($_POST['your_name'])) {
          $errors['name'] = 'Your name is required.';
        } else {
          $name = $_POST['your_name'];
        }

        if(empty($_POST['your_comment'])) {
          $errors['comment'] = 'Please enter a comment.';
        } else {
          $comment = $_POST['your_comment'];
        }

            if(array_filter($errors)) {
              //error
            } else {
              $name = mysqli_real_escape_string($connect, $_POST['your_name']);
              $comment = mysqli_real_escape_string($connect, $_POST['your_comment']);

              $sql = "INSERT INTO comment_info(Name, Comment) VALUES('$name', '$comment')";

              if(mysqli_query($connect, $sql)) {
                //Success
                $name = '';
                $comment = '';
                header("Location: 1stblog.php");
              } else {
                echo 'query error ' . mysqli_error($connect);
              }
            }
      }


      $data = 'SELECT Name, Comment, curtime FROM comment_info';

      $result = mysqli_query($connect, $data);

      $count = mysqli_num_rows($result);

      $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);


 ?>

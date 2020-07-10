<?php
include 'includes/db.php';

  $sql = "SELECT * FROM remote_control ORDER BY id DESC LIMIT 1";

      $result = mysqli_query($conn, $sql);

      if(mysqli_num_rows($result) > 0 ){
    $row = mysqli_fetch_assoc($result);
          echo "<p>";
            echo $row['direction'];
              echo "</p>";

      }else{
        echo "There is no direction!";
      }

  ?>

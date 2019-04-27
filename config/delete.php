<?php require "config.php"?>
<?php
      $ids = $_POST['ids'];

      foreach ($ids as $key => $value) {
        $sql = "DELETE FROM info WHERE id = {$value}";
        $fire = mysqli_query($con,$sql);

        if ($fire) {
          $dmsg = "Successfully Deleted";
          header("Location:../home.php?dmsg=".$dmsg);
        }
      }
?>

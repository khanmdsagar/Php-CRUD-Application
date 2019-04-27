<?php require "config.php"?>

<?php
    if((isset($_POST['submit']))){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $query = "INSERT INTO info(firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')";
        $fire = mysqli_query($con,$query);
        if ($fire) {
          $msg = "Successfully Inserted";
          header("Location:../home.php?msg=".$msg);
        }
    }
?>

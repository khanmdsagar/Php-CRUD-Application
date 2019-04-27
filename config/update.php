 <?php require "config.php"?>

 <?php
     if(isset($_GET['upd'])){
       $id = $_GET['upd'];
       $queryd = "SELECT * FROM info WHERE id = $id";
       $fired = mysqli_query($con,$queryd);
       $contacts = mysqli_fetch_assoc($fired);
     }
 ?>

 <?php
     if((isset($_POST['update']))){
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];

         $querye = "UPDATE info SET firstname='$firstname', lastname='$lastname',email='$email',phone='$phone' WHERE id=$id";

         $firee = mysqli_query($con,$querye);

         if ($firee) {
           $umsg = "Successfully Updated";
           header("Location:../home.php?umsg=".$umsg);
         }
     }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Students</title>
   <link rel="stylesheet" href="../static/style.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
  <div class="container">


     <nav class="navbar">
         <div class="navitems">
           <div class="logo">
             <a href="#">my Contacts</a>
           </div>

           <div class="search">
             <input type="text" name="" value="" placeholder="Search here...">
           </div>

           <div class="menu">
             <p id="addmenu">+</p>
           </div>
         </div>
     </nav>

 <div class="udialogbg" id="udialogbg">
    <div class="udialog">
       <div class="udialoginp">
          <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
              <input value="<?php echo $contacts['firstname']?>" name="firstname" type="text" placeholder="First name" required>
              <input value="<?php echo $contacts['lastname']?>" name="lastname" type="text" placeholder="Last name" required>
              <input value="<?php echo $contacts['email']?>" name="email" type="email" placeholder="Email address" required>
              <input value="<?php echo $contacts['phone']?>" name="phone" type="text" placeholder="Phone number" required>
              <div class="ubutton">
                <button name="update">Update</button>
              </div>
          </form>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript" src="static/app.js"></script>
</body>
</html>

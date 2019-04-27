<?php require "config/config.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Students</title>
   <link rel="stylesheet" href="static/style.css">
</head>
<body>
<div class="container">

 <nav class="navbar">
     <div class="navitems">
       <div class="logo">
         <a href="home.php">my Contacts</a>
       </div>

       <form class="search" action="" method="get">
           <input type="text" name="search" value="" placeholder="Search by lastname...">
       </form>

       <div class="menu">
         <p id="addmenu">+</p>
       </div>
     </div>
 </nav>

<div class="idialogbg" id="idialogbg">
<div class="idialog">
  <div class="close">
    <p id="closebtn" class="closebtn">close</p>
  </div>
   <div class="idialoginp">
      <form action="config/insert.php" method="POST">
          <input name="firstname" type="text" placeholder="First name" required>
          <input name="lastname" type="text" placeholder="Last name" required>
          <input name="email" type="email" placeholder="Email address" required>
          <input name="phone" type="text" placeholder="Phone number" required>
          <div class="button">
            <button name="submit">Insert</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="content">
<div class="contacts">

<form class="" action="config/delete.php" method="post">
  <button class="deletebtn">Delete Items</button>
  <table>
    <?php
    if (isset($_GET['msg'])) {
      $msg = $_GET['msg'];
      echo $msg;
    }
    if (isset($_GET['dmsg'])) {
      $dmsg = $_GET['dmsg'];
      echo $dmsg;
    }
    if (isset($_GET['umsg'])) {
      $umsg = $_GET['umsg'];
      echo $umsg;
    }
    ?>
    <tr>
      <th>Select</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Edit</th>
    </tr>

  <?php
  if(isset($_GET['search'])){
     $lastname = $_GET['search'];
     $queryf = "SELECT * FROM info WHERE lastname LIKE '%$lastname%'";
  }else{
     $queryf = "SELECT * FROM info";
  }
  $firef = mysqli_query($con,$queryf);

  ?>

  <?php
  $sql = mysqli_query($con,"SELECT * FROM info");
  $rows = mysqli_num_rows($sql);
  ?>

  <?php
  while ($contacts = mysqli_fetch_array($firef)) {
   ?>
   <tr>
     <td><input type="checkbox" name=ids[] value=<?php echo $contacts['id'];?>></td>
     <td><?php echo $contacts['firstname'];?></td>
     <td><?php echo $contacts['lastname'];?></td>
     <td><?php echo $contacts['email'];?></td>
     <td><?php echo $contacts['phone'];?></td>
     <td><a href="config/update.php ?upd=<?php echo $contacts['id']?>" class="editbtn" id="edit">Edit</a></td>
   </tr>
   <?php
  }
  ?>
  </table>
</form>

<?php
if ($rows==0) {?>
  <table>
  <tr>
    <td>
    <h2 style="color: rgba(0,0,0,.4);">No Data Available</h2>
    </td>
  </tr>
  </table>
  <?php
}
?>

</div>
</div>

<script type="text/javascript" src="static/app.js"></script>

</body>
</html>

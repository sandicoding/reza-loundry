<?php
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PUTRI LAUNDRY</title>

    <?php
      include "include/header.php";
    ?>
  </head>
  <body style="background-image:url('../laundry/bg1.jpg'); background-size:cover;">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
      <a class="navbar-brand" href="#">Putri Laundry</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
        include "include/list.php"
      ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="jumbotron text-center " style="padding:150px;background-color: #001E6C; color : #fff;">
  <h1> Hai Reza.. Selamat Datang Di PUTRI LAUNDRY</h1>
  </div>
</div>

<?php
}else{
	header("location:login/index.php");
}

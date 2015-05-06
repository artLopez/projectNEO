<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 4/29/15
 * Time: 10:42 AM
 */
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">NEO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="active" href="index.php">Home<span class="sr-only"></span></a></li>
        <li><a class="active" href="profile.php">Profile</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION['username'])){
              echo "<li><a class='active' href='logout.php'>Logout</a></li>";
          }else{
              echo '<li><a class="active" href="login.php">Login</a></li>';
          }?>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
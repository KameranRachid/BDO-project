<nav class="navbar navbar-default navbar-static-top navbar-padded text-uppercase app-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed p-x-0" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <span><img src="../assets/img/Logo.JPG">Aquiver</span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li >
          <a href="index.php">Home</a>
        </li>



      <?php if(isset($_SESSION['username'])): ?>

        <li>
          <a href="#">Guides</a>
        </li>

        <li >
          <a href="eventList.php">Events</a>
        </li>

        <li>
          <a href="user-profile.php"><?php echo $_SESSION["username"];?></a>
        </li>
        <li >
          
          <a href="signout.php">Log Out</a>

        </li>

       <?php else: ?>
        <li>

          <a href="login.php">Login</a>

        </li>

      <?php endif; ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
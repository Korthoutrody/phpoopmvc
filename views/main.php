<html>
<head>
	<title>Rody Korthout</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
      <div class="headnav container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Rody Korthout</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL; ?>projects">Portfolio Blog</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li><a href="<?php echo ROOT_URL; ?>">Hallo, <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/logout">Uitloggen</a></li>
          <?php else : ?>
            <li><a href="<?php echo ROOT_URL; ?>users/login">Inloggen</a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/register">Registreren</a></li>
          <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

     <div class="row">
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>

    </div><!-- /.container -->

    <!-- Footer -->
<footer class="page-footer font-small">

  <!-- Copyright -->
  <div class="footer-copyright text-center">© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> http://www.rodykorthout.nl</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
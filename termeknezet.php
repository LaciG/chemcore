<?php
  require_once 'langselect.php';
  $id = $_GET['id'];
  echo $id;
?>
<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>chemcore termeknézet</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="termeknezethtml">
<header>
  <div class="container-fluid">
    <div class="row">
      <div id="logo" class="text-center col-sm-offset-4 col-sm-4"> <a href="index.html"><img src="img/logo.png" alt="logo"></a> </div>
      <div class="col-sm-offset-1 col-sm-1 text-right dropdown" id="lang"> <a id="dLabel" type="button" class="text-uppercase" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['MENU_HUEN']; ?><span class="caret"></span> </a>
        <ul class="dropdown-menu text-uppercase" aria-labelledby="dLabel">
          <li><a href="?lang=hu&id=<?php echo $id; ?>"><?php echo $lang['Hungary']; ?></a></li>
          <li><a href="?lang=en&id=<?php echo $id; ?>"><?php echo $lang['English']; ?></a></li>
          <li><a href="?lang=de&id=<?php echo $id; ?>"><?php echo $lang['Deutsch']; ?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-default navbar-static-top"> 
        
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="lily.php" class="text-uppercase"><?php echo $lang['MENU_1']; ?> <span class="sr-only">(current)</span></a></li>
            <li><a href="scudo.php" class="text-uppercase"><?php echo $lang['MENU_2']; ?></a></li>
            <li><a href="index.php#contact" class="text-uppercase"><?php echo $lang['MENU_3']; ?></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
        
      </nav>
    </div>
  </div>
</header>
<section id="termeknezet">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 padding-none">
        <h2 class="text-capitalize text-center"><?php echo $lang['PRODUCT_PAGE_TITLE']; ?></h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="termekek col-xs-12">
        <div class="col-xs-12 col-md-4"> <?php include_once 'product/image.php'; ?> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php include_once 'product/name.php'; ?><br>
            <span><?php include_once 'product/specs.php'; ?></span></h3>
          <ul>
            <?php include_once 'product/desc.php'; ?>
          </ul>
          <h4 class="text-capitalize"><?php echo $lang['PRODUCT_PAGE_INGR']; ?></h4>
          <p><?php include_once 'product/ingredients.php'; ?><br>
            <br>
            <span><?php echo $lang['PRODUCT_PAGE_INCI']; ?></span></p>
          <?php include_once 'product/pdf.php'; ?><img src="img/pdf.png" alt="pdf" class="text-center text-capitalize"><?php echo $lang['PRODUCT_PAGE_PDF']; ?></a> </div>
        <a href="#">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['PRODUCT_PAGE_BUTTON']; ?></button>
        </a></div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-3">
        <div id="logo2" class="text-center col-sm-offset-4 col-sm-4"> <a href="index.php"><img src="img/logo.png" alt="logo"></a> </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-6">
        <ul class="nav navbar-nav">
          <li><a href="lily.php" class="text-uppercase"><?php echo $lang['MENU_1']; ?> </a></li>
          <li><a href="scudo.php" class="text-uppercase"><?php echo $lang['MENU_2']; ?></a></li>
          <li><a href="index.php#kapcsolat" class="text-uppercase"><?php echo $lang['MENU_3']; ?></a></li>
          <li><a href="#" class="text-uppercase">ászf</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class="text-uppercase"><i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
          <li><a href="#" class="text-uppercase"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
          <li><a href="#" class="text-uppercase"><i class="fa fa-linkedin-square" aria-hidden="true"></i> </a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <p class="text-center">Chemcore <span class="text-uppercase"> IMPEX © 2017</span></p>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>
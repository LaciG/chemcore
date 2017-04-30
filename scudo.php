<?php
  require_once 'langselect.php';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>chemcore scudo</title>

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
<body id="scudohtml">
<header>
  <div class="container-fluid">
    <div class="row">
      <div id="logo" class="text-center col-sm-offset-4 col-sm-4"> <a href="index.html"><img src="img/logo.png" alt="logo"></a> </div>
      <div class="col-sm-offset-1 col-sm-1 text-right dropdown" id="lang"> <a id="dLabel" type="button" class="text-uppercase" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['MENU_HUEN']; ?><span class="caret"></span> </a>
        <ul class="dropdown-menu text-uppercase" aria-labelledby="dLabel">
          <li><a href="?lang=hu"><?php echo $lang['Hungary']; ?></a></li>
        	<li><a href="?lang=en"><?php echo $lang['English']; ?></a></li>
          <li><a href="?lang=de"><?php echo $lang['Deutsch']; ?></a></li>
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
            <li class="active"><a href="scudo.php" class="text-uppercase"><?php echo $lang['MENU_2']; ?></a></li>
            <li><a href="index.php#contact" class="text-uppercase"><?php echo $lang['MENU_3']; ?></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
        
      </nav>
    </div>
  </div>
</header>
<section id="scudo-mosogelek">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 padding-none">
        <h2 class="text-capitalize text-center"><?php echo $lang['SCUDO_TITLE_1']; ?></h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="termekek col-xs-12 col-md-6 bg1">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_1_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_1']; ?><br>
            <span>1,5l / 3l /4,5l</span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_1_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
      <div class="termekek col-xs-12 col-md-6 bg2">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_2_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_2']; ?><br>
            <span>1,5l / 3l /4,5l</span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_2_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
    </div>
  </div>
</section>
<section id="scudo-konyhai-mosogatoszerek">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 padding-none">
        <h2 class="text-capitalize text-center"><?php echo $lang['SCUDO_TITLE_2']; ?></h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="termekek col-xs-12 col-md-6 bg1">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_3_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_3']; ?><br>
            <span><?php echo $lang['SCUDO_ITEM_NAME_3_SPECS']; ?></span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_3_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
      <div class="termekek col-xs-12 col-md-6 bg2">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_4_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_4']; ?><br>
            <span><?php echo $lang['SCUDO_ITEM_NAME_4_SPECS']; ?></span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_4_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
    </div>
  </div>
</section>
<section id="scudo-mosogel-kapszulak">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 padding-none">
        <h2 class="text-capitalize text-center"><?php echo $lang['SCUDO_TITLE_3']; ?></h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="termekek col-xs-12 col-md-6 bg1">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_5_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_5']; ?><br>
            <span>30 db</span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_5_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
      <div class="termekek col-xs-12 col-md-6 bg2">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_6_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_6']; ?><br>
            <span>30 db</span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_6_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
    </div>
  </div>
</section>
<section id="scudo-tisztitoszerek">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 padding-none">
        <h2 class="text-capitalize text-center"><?php echo $lang['SCUDO_TITLE_4']; ?></h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="termekek col-xs-12 col-md-6 bg1">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_7_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_7']; ?><br>
            <span>750 ml</span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_7_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
      <div class="termekek col-xs-12 col-md-6 bg2">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_8_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_8']; ?><br>
            <span>500 ml</span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_8_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
      <div class="termekek col-xs-12 col-md-6 bg3">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_9_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_9']; ?><br>
            <span>750 ml</span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_9_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
      <div class="termekek col-xs-12 col-md-6 bg4">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_10_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_10']; ?><br>
            <span>750 ml</span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_10_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a></div>
      <div class="termekek col-xs-12 col-md-6 bg1">
        <div class="col-xs-12 col-md-4"> <img src="<?php echo $lang['SCUDO_ITEM_NAME_11_PIC']; ?>" alt="" class="img-responsive"> </div>
        <div class="col-xs-12 col-md-8">
          <h3 class="text-capitalize"><?php echo $lang['SCUDO_ITEM_NAME_11']; ?><br>
            <span>1000 ml</span></h3>
          <ul>
            <?php echo $lang['SCUDO_ITEM_NAME_11_DESC']; ?>
          </ul>
        </div>
        <a href="termeknezet.html">
        <button class="btn btn-primary text-uppercase"><?php echo $lang['SCUDO_ITEM_BUTTON']; ?></button>
        </a> </div>
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
          <li><a href="lily.php" class="text-uppercase"><?php echo $lang['MENU_1']; ?></a></li>
          <li><a href="scudo.php" class="text-uppercase"><?php echo $lang['MENU_2']; ?></a></li>
          <li><a href="index.php#kapcsolat" class="text-uppercase"><?php echo $lang['MENU_3']; ?></a></li>
          <li><a href="aszf.html" class="text-uppercase">ászf</a></li>
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
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
<title>chemcore home</title>

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
<body>
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
  <div class="jumbotron">
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
              <li><a href="#lily-anchor" class="text-uppercase"><?php echo $lang['MENU_1']; ?> <span class="sr-only">(current)</span></a></li>
              <li><a href="#scudo" class="text-uppercase"><?php echo $lang['MENU_2']; ?></a></li>
              <li><a href="#contact" class="text-uppercase"><?php echo $lang['MENU_3']; ?></a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
          
        </nav>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-5 xs-bg">
          <h1><b>CHEMCORE IMPEX KFT.</b></h1>
          <p><?php echo $lang['CHEMCORE_TEXT']; ?><br>
          </p>
          <p><a class="btn btn-primary btn-lg" href="#haztartasi" role="button"><?php echo $lang['CHEMCORE_BUTTON']; ?></a></p>
        </div>
      </div>
    </div>
  </div>
</header>
<section id="rolunk">
  <div class="container">
    <div class="row">
      <div class="col-sm-6"><img src="img/rolunk.png" class="img-responsive" alt=""></div>
      <div class="col-sm-6">
        <h2 class="text-capitalize"><?php echo $lang['ABOUT_US']; ?></h2>
        <p><?php echo $lang['ABOUT_US_TEXT']; ?>
          <b><?php echo $lang['ABOUT_US_TESCO']; ?> </b> </p>
      </div>
    </div>
  </div>
</section>
<section id="haztartasi">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <hr>
        <h2 class="text-capitalize text-center">háztartási-vegyipari termékek</h2>
      </div>
      <div class="col-xs-12 col-sm-4 text-center box-shadow">
        <div class="border50"> <img src="img/stars_ikon-01.svg" class="img-responsive" alt="logo-csillag"></div>
        <h3 class="text-capitalize">számos használatra</h3>
        <p>A tisztítás, takarítás és higiénia számos
          területét felölelő termékkínálat. </p>
      </div>
      <div class="col-xs-12 col-sm-4 text-center box-shadow">
        <div class="border50middle"> <img src="img/hatekony_ikon-01.svg" class="img-responsive" alt="logo-ház"></div>
        <h3 class="text-capitalize color-middle">hatékony termékek</h3>
        <p>Gyors és eredményes megoldást nyújtunk
          minden otthon számára. </p>
      </div>
      <div class="col-xs-12 col-sm-4 text-center box-shadow">
        <div class="border50"> <img src="img/termekpaletta_ikon-01.svg" class="img-responsive" alt="logo-termékpaletta"></div>
        <h3 class="text-capitalize">színes termékpaletta</h3>
        <p>Magas használati érték, bőséges kínálat,
          széles választék. </p>
      </div>
    </div>
  </div>
</section>
<section id="lily">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-offset-1 col-md-4"><img src="img/washing-powder.jpg" alt="washing-powder" class="img-responsive"> </div>
      <div class="col-xs-12 col-md-offset-1 col-md-4" id="lily-anchor">
        <h2 class="text-uppercase">lily termékcsalád</h2>
        <p class="text-justify">A Lily termékcsalád a textíliák megfelelő tisztítását, mosását, egyéb elő-és utókezelését biztosító termékeket tartalmaz (áztatástól, mosáson át- folyékony mosószerrel, kapszulált mosógéllel, mosóporral, egészen a kimagasló minőségű szálpuhításig). Prémium minőségű termékek tartoznak ebbe a katergóriába. Magas minőségű piacvezető mosószerek alapján lettek kifejlesztve, figyelve maradéktalanul a vásárlói elvárásokra.<br>
          <br>
          A mosó-és tisztítószerek magas koncentrációban felületaktív anyagokat, enzimeket, különböző gondosan összeválogatott mosó-és tisztítóhatást fokozó adalékanyagot  (szálpuhító, optikai fehérítő, színvédő, klórmentes konzerváló, oxigénes fehérítő) és magas minőségű illatanyagokat tartalmaznak.<br>
          <br>
          Mosó-és tisztítószereink összetételüket, csomagolásukat és a szükséges termék dokumentációt tekintve, úgy lettek kialakítva, hogy a mindenkori, érvényben lévő hazai-és nemzetközi  jogszabályoknak megfeleljenek. </p>
        <a href="lily.html">
        <button class="btn btn-primary text-uppercase">tovább</button>
        </a> </div>
    </div>
  </div>
</section>
<section id="scudo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-offset-2 col-md-4">
        <h2 class="text-uppercase">scudo termékcsalád</h2>
        <p class="text-justify">A Scudo termékcsalád, megfelelő árért, megfelelő minőségű tisztítást garantál a háztartás egész területén, a konyhától a nappalin keresztül a fürdőszobáig.<br>
          <br>
          A termékek minőségi alapanyagokat tartalmaznak a megfelelő hatás elérése érdekében. Praktikus megoldást jelentenek a háztartás bármely területén. A termékpaletta úgy lett kifejlesztve/összeállítva, hogy az otthonok minden területét tisztán tarthassák a termékcsalád tagjainak használatával (pl. vízlágyítótól a fa-és bútorápolón keresztül a mosogatószerig).<br>
          <br>
          A mosó-és tisztítószerek felületaktív anyagokat, enzimeket, különböző gondosan összeválogatott mosó-és tisztítóhatást fokozó adalékanyagot tartalmaznak. </p>
        <a href="scudo.html">
        <button class="btn btn-primary text-uppercase">tovább</button>
        </a> </div>
      <div class="col-xs-12 col-md-offset-1 col-md-4"><img src="img/made-cleaning.jpg" alt="made-cleaning" class="img-responsive"> </div>
    </div>
  </div>
</section>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <h3 class="text-capitalize">kapcsolat</h3>
        <address>
        <p> ChemCore Impext Ltd.<br>
          H-1024 Budapest., Ady Endre str. 19. a </p>
        <label class="text-uppercase">e-mail:<br>
          <span id="email2" class="text-lowercase">info@chemcore.hu</span> </label>
        <br>
        <label class="text-uppercase">telefon:<br>
          <span id="tel" class="text-lowercase">+36 1 920 1177</span> </label>
        </address>
      </div>
      <div class="col-sm-offset-1 col-sm-7">
        <form class="form-horizontal">
          <div class="col-xs-12 col-md-6">
            <input type="text" class="form-control" id="nev" placeholder="Név">
          </div>
          <div class="col-xs-12 col-md-6">
            <input type="email" class="form-control" id="email" placeholder="E-mail">
          </div>
          <div class="col-sm-12">
            <textarea id="uzenet" class="form-control" rows="3" placeholder="Üzenet"></textarea>
          </div>
          <div class="col-sm-12">
            <button type="submit" class="btn btn-default text-uppercase">küldés</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-3">
        <div id="logo2" class="text-center col-sm-offset-4 col-sm-4"> <a href="index.html"><img src="img/logo.png" alt="logo"></a> </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-6">
        <ul class="nav navbar-nav">
          <li><a href="#lily-anchor" class="text-uppercase">Lily </a></li>
          <li><a href="#scudo" class="text-uppercase">Scudo</a></li>
          <li><a href="#kapcsolat" class="text-uppercase">Kapcsolat</a></li>
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
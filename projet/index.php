<!DOCTYPE html>
<html>
<head>
  <title>NANbulding</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device_width, initiale-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <nav class="navbar navbar-inverse navbar-fixed-top navbar-principale" ">

                        <div class="container" >

                              <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monMenu">
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                    </button>
                                    <h1><a  class="navbar-brand" id="titre" style="">NANbulding</a></h1>
                              </div>

                              <div class="collapse navbar-collapse  navbar-right" id="monMenu">
                                    <ul class="nav navbar-nav ">
                                          <li class="menu_items" ><a href="index.php">ACCUEIL</a></li>
                                          <li class="menu_items"><a href="#about">ABOUT</a></li>
                                          <li class="dropdown menu_items"><a  class="dropdown-toggle" data-toggle="dropdown">SERVICE</a>
                                          <ul class="dropdown-menu">
                     
                                              <li><a href="service.php">Demander un service</a></li>
                      
                                              <li ><a href="join.php">rejoignez l'equipe</a></li>
                                            </ul></li>
                                          <li class="menu_items"><a href="#contacts">CONTACTS</a></li>
                                          
                                         

                                    </ul>
                                   
                              </div>
                    </div>
    </nav>
   <div class="container-fluid ">  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-">
           <div id="monCarousel" class="carousel slide" data-ride="carousel" >
<ol class="carousel-indicators">
            <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#monCarousel" data-slide-to="1"></li>
                      <li data-target="#monCarousel" data-slide-to="2"></li>
                      <li data-target="#monCarousel" data-slide-to="3"></li>
          </ol>
          

          <div class="carousel-inner carousel1" role="listbox">

            
            <div class="item active">
              <img src="images/banner1.jpg" style="height:600px; width:100%">
              <div   class="carousel-caption">
                 <h3>NANbulding</h3>
                <p>vous servir, notre devoir</p>
              </div>
            </div>
            <div class="item" >
              <img src="images/cons.jpg" style="height:600px; width:100%;">
              <div class="carousel-caption">
                <h3>rigueur</h3>
                <p> du serieux dans le travail</p>
                <p> </p>
              </div>
            </div>
            <div class="item" >
              <img src="images/construc.jpg" style="height:600px;width:100%;">
              <div class="carousel-caption">
                <h3>proffesionnallisme</h3>
                <p>des proffessionnelle a votre disposition à chaque instant</p>
              </div>
            </div>
           
           
          </div>

          <a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          </a>
          <a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          </a>
    </div>

        </div>
      </div>
   </div>
   <div class="container" id="about"> 
     <div class="row"> 
      <div class="col-md-6 col-sm-6 about">
        <img src="images/ab.jpg" alt="image" />
      </div>
      <div class="col-md-6 about">
        <div class="title-heading-about">
              <h3>A PROPOS DE NOUS</h3>
              
            </div>
             <p>Chez NANbulding, notre force réside dans la pertinence des actions et des initiatives de nos membres, qui sont orientés vers la satisfaction de nos clients. Nos donneurs d’ouvrage le confirment; c’est une expérience-client exemplaire qui nous mérite leur confiance.</p>
            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary more-button" data-toggle="modal" data-target="#exampleModal33">
                MORE INFO
              </button>
      </div>
    </div> 
   </div>
<!--footer-->
   <div class="footer">
     <div class="footer" id="contacts">
  <div class="container">
    <div class="agile-footer-grids">
      <div class="col-md-3 col-sm-6 col-xs-6 ha-soum-footer-grid">
        <div class="logo-2">
          <h2><a href="index.html">NANbulding</a></h2>
        </div>
        <ul>
          
          <li>mars 2019,</li>
          
          <li>Email</li>
          <li><a href="mailto:info@example.com">hamedsoum4023@gmail.com</a></li>
          <li>Phone Number</li>
          <li>+225 87 00 83 15</li>
        </ul>       
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 ha-soum-footer-grid">
        <h3>HORAIRES</h3>
        <div class="col-md-5 col-sm-5 col-xs-5 agile-opening">
          <ul>
            <li>Lundi </li>
            <li>Mardi </li>
            <li>Mercredi </li>
            <li>Jeudi </li>
            <li>Vendredi </li>
            <li>Samedi </li>
            <li>Dimanche </li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 agile-opening">
          <ul>
            <li>8h-24h</li>
            <li>8h-24h</li>
            <li>8h-24h</li>
            <li>8h-24h</li>
            <li>8h-24h</li>
            <li>8h-24h</li>
            <li>8h-24h</li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-6 w3-agile-footer-grid grid-w3-1">
        <div class="contact-block-left">
          <form action="#" method="post">
            <input type="text" placeholder="Name" name="Name" required="">
            <input type="email" class="email" placeholder="Email" name="Email" required="">             
            <textarea placeholder="Message" name="message" required=""></textarea>
            <input type="submit" value="envoyer">
          </form>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright">
    <p>© © NANbulding tous droits reservé | Design by SOUMAGORO MAMADOU HAMED</a> </p>
  </div>
  <!-- //copyright -->
</div>
</div>
     
   </div>



   
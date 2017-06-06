<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>IMIS | Designed By Fe</title>
  <meta name="keywords" content="flat bootstrap, bootstrap themes, HTML themes, CSS3 animation, creative responsive websites, illustration bootstrap design, blue responsive themes, mobile menu website, slide bootstrap navigation, apple inspired theme, mobile website theme">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/colors/yellow.css">
  <link rel="stylesheet" href="css/custom-styles.css">

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="/favicon.ico">
</head>

<body>
  
      <nav>
        <ul class="list-unstyled main-menu">
          
          <!--Include your navigation here-->
          <li class="text-right"><a href="#" id="nav-close">X</a></li>
          <li><a href="about.html">About <span class="icon"></span></a></li>
          <li><a href="features.html">Features <span class="icon"></span></a></li>
          <li><a href="services.html">Services <span class="icon"></span></a></li>
          <li><a href="portfolio.html">Portfolio <span class="icon"></span></a></li>
          <li><a href="login.html">Log In <span class="icon"></span></a></li>
          <li><a href="contact.php">Contact <span class="icon"></span></a></li>
        </ul>
      </nav>
          
    <div class="navbar navbar-inverse navbar-fixed-top">      
        
        <!--Include your brand here-->
        <a class="navbar-brand" href="index.html"><img src="img/imis.png" class="img-responsive" alt="Logo"></a>
        <div class="navbar-header pull-right">
          <a id="nav-expander" class="nav-expander fixed">
            MENU &nbsp;<i class="fa fa-bars fa-lg white"></i>
          </a>
        </div>
    </div>
    
    
    <!--Header Title-->
    <section id="header-title">
      <div class="container">
        <div class="row animated fadeInUpBig">
          <div class="col-sm-12">
            <h2 class="white">Keep in <span class="color">Touch</span></h2>
          </div>
        </div>
      </div>
    </section>
    
    <!--Main-->
    <section id="main" class="gray-bg">
      <div class="container">
        <div class="row">
          
          <!--Contact Form-->
          <div class="col-sm-9">
            <h3>We Want To Hear From You</h3>
            <p>**************************</p><br />
            
            

            <?php
            if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";
            if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";

            elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";

            ?>
          
            <form method="POST" action="contact-form-submission.php">
              <div class="form-group">
                <input type="text" class="col-xs-12 form-control" name="contact_name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" class="col-xs-12 form-control" name="contact_email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="col-xs-12 form-control" name="contact_subject" placeholder="Subject">
              </div>
              <textarea class="col-xs-12 form-control" name="contact_message" rows="6" placeholder="Message"></textarea>
              <input type="hidden" name="save" value="contact">
              <br />
              <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
            </form>
            
            
          </div> 
          
          <!--Side Bar-->

          </div>
        </div>
      </div>
    </section>
    
    
    <!--Map-->
    <div id="map" class="transparent">
          
      <!--Google Map Embedd. Make sure to remove all width and height inline styles and everything after the closing </iframe> tag.-->
      <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;
      q=atlanta&amp;aq=&amp;sll=32.678125,-83.178297&amp;sspn=5.593176,9.876709&amp;ie=UTF8&amp;
      hq=&amp;hnear=Atlanta,+Fulton,+Georgia&amp;t=m&amp;z=6&amp;iwloc=A&amp;output=embed"></iframe>
          
    </div>   
    
    
    <!--Bottom-->
    <section id="bottom">
      <div class="container">
        <div class="row">
          
          <!--Section 1-->
          <div class="col-sm-3 margin-40">
            <h3>About IMIS</h3>
            <div class="gray-box">
              <p></p>
              <a class="more" href="#">More</a>
            </div>
          </div>
          
          <!--Section 2-->
          <div class="col-sm-3 margin-40">
            <h3>Email Sign Up</h3>
            <form class="form-inline" role="form" id="email-signup">
              <div class="form-group">
                <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-chevron-right fa-lg"></i></button>
            </form>
            <p>Please use an valid email address</p>
          </div>
          
          <!--Section 3-->
          <div class="col-sm-3 margin-40">
            <h3>Quick Links</h3>
            <ul class="list-unstyled bottom-links">
              <li><a href="https://my.uwindsor.ca/">MyUwindsor</a></li>
              <li><a href="#">______</a></li>
              <li><a href="#">______</a></li>
              <li><a href="#">______</a></li>
            </ul>
          </div>
          
          <!--Section 4-->
          <div class="col-sm-3 margin-40">
            <h3>Contact</h3>
            <div class="gray-box">
              <p><i class="fa fa-phone fa-lg"></i> ***.***.****</p>
            </div>
            <div class="color-box">
              <p><a href="mailto:federica0823@gmail.com"><i class="fa fa-envelope-o fa-lg"></i> Contact us by email</a></p>
            </div>
            <ul class="list-inline social-icons">
              <li><a href="https://twitter.com/UWindsor"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.facebook.com/UWindsor/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>

            </ul>
            
          </div>
          
        </div>
      </div>
    </section>
    
    
    <!--Footer-->
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p class="copyright">Copyright @ IMIS.</p>
          </div>
        </div>
      </div>
    </section>

   
      
    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.navgoco.js"></script>
    <script src="js/parsley.min.js"></script>
    <script src="js/main.js"></script>   
       
    </body>
</html>
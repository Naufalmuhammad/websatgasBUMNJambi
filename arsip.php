<head>
  <link rel="shortcut icon" href="images/satgas.png">
  <title> Arsip &mdash; Website Satgas BUMN Jambi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 d-flex">
           
           <img src="images/satgas.png" alt="logo satgas" height="120px" align="left"/>
            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

          </div>
          <div class="col-12 col-lg-6 ml-auto d-flex">
          <div class="ml-md-auto top-social d-none d-lg-inline-block">
                 <img src="images/bumn2.jpeg" alt="logo satgas" height="80px" align="right"/>
            </div>
  
            </form>
          
          </div>
          <div class="col-6 d-block d-lg-none text-right">
          </div> 
          <a  href="index.html" class="site-logo"> SATGAS Tanggap Bencana COVID-19 BUMN Jambi </a>
            
          </div>
        </div>
      </div>
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active">
                   <a href="index.html" class="nav-link text-left">Beranda</a>
                </li>
                <li>
                  <a href="categories.html" class="nav-link text-left">Informasi</a>
                </li>
                <li>
                  <a href="blog-single.html" class="nav-link text-left">Agenda</a>
                </li>
                <li class="dropdown"><a href="#" class="nav-link text-left">Tentang Kami</a>
                      <ul class="isi-dropdown">
                        <li><a href="about.html" class="nav-link text-left">Tentang Satgas</a></li>
                        <li><a href="KONTAK.html" class="nav-link text-left">Posko Satgas</a></li>
                        <li><a href="arsip.html" class="nav-link text-left">Arsip Satgas</a></li>
                      </ul>
                </li>
                <li>
                  <a href="updatebencana.html" class="nav-link text-right">Update Data Covid-19</a>
                </li>
                <li>
                  <a href="https://us02web.zoom.us/j/825066349?pwd=ekdKMG13ejdKMUoyb3RqakxXckM5dz09" class="nav-link text-right" target="blank">Join Zoom in Room</a>
                </li>

              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>

   <div class="site-section subscribe bg-light">
      <div class="container">
        <form action="#" class="row align-items-center">
          <div class="col-md-8 mr-auto">
          <div class="col-20 text-center">
          	 <font size="5"><h3>Laporan Arsip Satgas BUMN Jambi</h3></font>
          </div>
            
            <div class="col-30 text-center">
                <tbody>
                <?php
                    include "koneksi.php";
                    $sql = $pdo->prepare("SELECT * FROM laporan");
                    $sql->execute();

                    while($data = $sql->fetch()){
                  ?>
                    <td><?php echo $data['nama_file'];?></td>
                    <br><?php echo $data['file'];?></br>
                    <td><?php echo $data['tanggal_terbit'];?></td>
                  <?php
                    }
                  ?>
                 </tbody>
            </div>

          </div>
          </div>
        </form>
      </div>
    </div>
    <!-- END section -->
      
      <div class="footer">
      <div class="container">
        

        <div class="row">
          <div class="col-12 text-left">
            <div class="copyright">
               	<div class="col-20 text-right">
                    	<a  href="https://accounts.google.com/" target="blank"><img src="images/email.jpg" height="40px"> :  </a>bumnjambi.covid19@gmail.com
                    </div>
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Powered by Telkom Indonesia Witel Jambi &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved.
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                    <p>HTML and CSS Code Copyright by <i aria-hidden="true"><a href="https://colorlib.com" target="_blank" >Colorlib</a> </i> </a></p>
                    
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>
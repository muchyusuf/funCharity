<html>
<title></title>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/normalize.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/component.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/custom-styles.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/demo.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/font-awesome-ie7.css') ?>">
    
     <script src="<?php echo base_url('file/bootstrap/js/jquery.mobilemenu.js') ?>"></script>
     <script src="<?php echo base_url('file/bootstrap/js/html5shiv.js') ?>"></script>
     <script src="<?php echo base_url('file/bootstrap/js/respond.min.js') ?>"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css.map') ?>">
    
    <script src="<?php echo base_url('file/mdl/material.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js.map') ?>"></script>
    
</head>
<body >
   <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header" style="background-color:#5E35B1;">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <img src="<?php echo base_url('file/asset/img/FunCharityLogo.png') ?>" alt="" class="img-responsive" width="40px" height="40px"> 
	  <span class="mdl-layout-title">
	  Fun Charity</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/home') ?>">Agenda</a>
        <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/donasi') ?>">Donasi</a>
        <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/aboutus') ?>">Tentang Kami</a>
      </nav>
    </div>
  </header>
  
  <main class="mdl-layout__content">
    <div class="page-content">
    <!-- Container -->
        <div class="container" align="center" >
            
            <div class="jumbotron" style="background-color: #CFD8DC;">
                  <h1 style="margin-top:-10px; color:#263238; ">Fun Charity</h1>
                  <label style="margin-top:-30px; color:#263238;">Galang dana Online untuk,</label>
                  <h4 id="changeText" style="color:#AD1457; margin-top:-5px;">Bencana Alam</h4>
                        <script type="text/javascript">
                        var text = ["Bencana Alam", "Kaum Duafa", "Pembangunan Tempat Ibadah", "Anak yatim Piatu" , "Buka Bersama"];
                        var counter = 1;
                        var elem = document.getElementById("changeText");
                        setInterval(change, 4000);
                        function change() {
                         elem.innerHTML = text[counter];
                            counter++;
                            if(counter >= text.length) { counter = 0; }
                        }
                        </script>
                    <p></p>
                  <p><a class="btn btn-danger btn-lg" href="<?php echo base_url('index.php/beranda/donasi') ?>" role="button">Donasi Sekarang</a></p>
            </div>
            <div class="ruler"></div>
        </div>
        <div class="container" align="center">
                <h1 style="margin-top:-10px; color:#263238;">DAFTAR AGENDA</h1>
                <label style="margin-top:-30px;">Daftar Agenda Amal bagi orang yang membutuhkan</label>
        </div>
        
    <!-- Container 1 -->
    <div class="container">
      <div class="featured-block">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-3">
            <div class="block">
            <div class="thumbnail">
              <img src="<?php echo base_url('file/asset/img/tanahlongsor.jpg') ?>" alt="" style="width:360px; height:170px;">
              <div class="caption">
                <h1>Bencana Alam</h1>
                <p>Cuibstui ipsum dolor sit amet, consectetuer adipiscing eli onec odio cuisque volutpat mattis</p>
                <a class="btn" href="<?php echo base_url('index.php/beranda/detail') ?>">more</a>
              </div>
              </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                    <img src="<?php echo base_url('file/asset/img/img2.jpg') ?>" alt="" class="img-responsive">
                    <div class="caption">
                      <h1>Kaum Duafa 	</h1>
                      <p>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis ctor, ultrices ut, element</p>
                      <a class="btn" href="#">more</a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                  <img src="<?php echo base_url('file/asset/img/img3.jpg') ?>" alt="" class="img-responsive">
                  <div class="caption">
                    <h1>Penyembuhan Penyakit</h1>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean</p>
                    <a class="btn" href="#">more</a>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-md-3">
            <div class="block">
            <div class="thumbnail">
              <img src="<?php echo base_url('file/asset/img/img4.jpg') ?>" alt="" class="img-responsive">
              <div class="caption">
                <h1>Pembangunan Tempat Ibadah</h1>
                <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, mod in, pharetra ultrici</p>
                <a class="btn" href="#">more</a>
              </div>
              </div>
            </div>
            </div>
                <div class="col-md" align="center">
                    <div class="col-sm-12 form-group">
                        <a class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/beranda/donasi') ?>">Lihat lebih banyak</a>
                    </div>
                </div>
          </div>
        </div>
        <div class="ruler"></div>  
        </div>
        <!-- Container 2 -->
        <div class="container">
            <!-- Container (Contact Section) -->
            <div class="container-fluid bg-grey">
              <h2 class="text-center">CONTACT</h2>
              <div class="row">
                <div class="col-sm-5">
                  <p>Hubungi kami, kami akan membalas email anda segera mungkin</p>
                  <p><span class="glyphicon glyphicon-map-marker"></span> Bandung, Dayeuhkolot no5 Indonesia</p>
                  <p><span class="glyphicon glyphicon-phone"></span> 081221689199</p>
                  <p><span class="glyphicon glyphicon-envelope"></span> admin@kingcode.com</p>
                </div>
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                      <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                  </div>
                  <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                  <div class="row">
                    <div class="col-sm-12 form-group">
                      <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
         <!-- footer --> 
        <footer class="mdl-mini-footer" style="background-color:#263238">
          <div class="mdl-mini-footer__right-section">
            <div class="mdl-logo">&copy; 2017  FunCharity | Design by <a href="#">King Code</a></div>
          </div>
        </footer>
    </div>
  </main>
   
</div>
   

    
    
</body>
</html>
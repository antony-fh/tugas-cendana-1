<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="description" content="Latih Otak"/>
    <meta name="author" content="Latih Otak"/>
    <meta property="og:site_name" content="Latih Otak"></meta>
    <meta property="og:title" content="Latih Otak"></meta>
    <meta property="og:type" content="website"></meta>
    <meta property="og:url" content=""></meta>
    <meta property="og:image" content=""></meta>
    <meta property="og:locale" content="id_ID"></meta>
	<meta content='Indonesia' name='geo.placename'/>
	<meta content='id' name='geo.country'/>

    <title>Latih Otak</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/normalize.css" rel="stylesheet">
<link href="../../assets/css/mj.css" rel="stylesheet">
  <!--   	Custom CSS -->
	<link href="../../assets/css/font-awesome.css" rel="stylesheet">
<style>
body{background:#54b4eb;}
        @font-face {
            font-family: 'Harabara';
            src: url('../../assets/fonts/Harabara.ttf') format('truetype');
            font-style: normal;
        }


/* Media Queries */
@media screen and (max-width: 55.6875em) {
	.navbar-right {
		font-size: 80%;
	}
}

@media screen and (max-height: 25.25em), screen and (max-width: 44.3125em) {

	.navbar-right {
		font-size: 100%;
		position: relative;
		text-align: center;
		padding: 0;
		top: auto;
	}

	.navbar-right > li {
		display: block;
		margin: 0;
		border-bottom: 4px solid #3793ca;
	}

	.navbar-right > li:first-child {
		border-top: 4px solid #3793ca;
	}

	li.open > a,
	.no-touch .navbar-right > li > a:hover,
	.no-touch .navbar-right > li > a:active {
		color: #fff;
		background: #02639d;
	}

	.dropdown-menu {
		position: relative;
		display: none;
		width: 100%;
	}

	.dropdown-menu > li {
		padding: 0;
	}

	.dropdown-menu > li > a {
		padding: 0.6em 2.3em 0.6em 0.6em;
		border: none;
		border-bottom: 2px solid #6fbbe9;
	}

	.dropdown-menu:after {
		display: none;
	}

	.navbar-right .open .dropdown-menu {
		display: block;
		width: 100%;
		left: 0;
		margin: 0;
		padding: 0;
	}

}
</style>
</head>

<body>
<!-- navbar atas -->

<!-- profil -->

  <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://disputebills.com"><img src="../../assets/image/best.png" alt="Dispute Bills">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav klasemen">
                    <li class="hidden">
                        <a href="page-top"></a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#profil">Profil</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#klasemen">klasemen</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#ranking">Ranking</a>
                    </li>
					
				</ul>
        <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<div class="tiny-bulat tiny-i">
								
							</div>
						
						<div class="tiny-peng u-nama-pemain"><img src="../../assets/image/coin1.png"/><?php/* echo $Koin; */?>1000<br/>
						<?php /*echo $Nama;*/ ?> Tomanyyu</div>
						</a>
						<ul class="dropdown-menu">
							<li><a class="fa-wrench" href="">Pengaturan</a></li>
							<li><a class="fa-sign-out" href="../Proses/Logout.php">Keluar</a></li>
						</ul>
					</li>
				</ul>
				
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>



    <!-- jQuery -->
    <script src="../../assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../assets/js/jquery.easing.min.js"></script>
    <script src="../../assets/js/classie.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../assets/js/jqBootstrapValidation.js"></script>
    <script src="../../assets/js/contact_me.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../../assets/js/mj.js"></script>
	<script src="../../assets/js/mj-ef.js"></script>
</body>
	<script>
	$('document').ready(function(){
		$('.cari-lo').hide();
	});
	</script>
</html>
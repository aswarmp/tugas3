<!DOCTYPE html>
<html>
<head>
 	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel="stylesheet" type="text/css" href="assets/css/onepage-scroll.css" />
    <link href="assets/css/metro.css" rel="stylesheet">
    <link href="assets/css/metro-icons.css" rel="stylesheet">
    <link href="assets/css/metro-responsive.css" rel="stylesheet">
     <link href="assets/css/styles.css" rel="stylesheet">
     <link href="assets/css/animate.css" rel="stylesheet">
     <link href="custom/style.css" rel="stylesheet">
</head>

<body>
<div class="app-bar">
	 <a class="app-bar-element">
        <span id="toggle-tiles-dropdown" class="mif-apps mif-2x"></span>
        <div class="app-bar-drop-container"
                data-role="dropdown"
                data-toggle-element="#toggle-tiles-dropdown"
                data-no-close="false" id="content">
            <div class="tile-container bg-white">
                <div class="tile-small bg-cyan">
                    <div class="tile-content iconic">
                        <span class="icon mif-onedrive"></span>
                    </div>
                </div>
                <div class="tile-small bg-yellow">
                    <div class="tile-content iconic">
                        <span class="icon mif-google"></span>
                    </div>
                </div>
                <div class="tile-small bg-red">
                    <div class="tile-content iconic">
                        <span class="icon mif-facebook"></span>
                    </div>
                </div>
                <div class="tile-small bg-green">
                    <div class="tile-content iconic">
                        <span class="icon mif-twitter"></span>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <span class="app-bar-divider"></span>
    <ul class="h-menu">
	    <li><a href="#">Home</a></li>
	    <li class="place-right no-hovered">
	        <form>
	            <div class="input-control text" id="input">
	                <input type="text" placeholder="Search...">
	                <button class="button"><span class="mif-search"></span></button>
	            </div>
	        </form>
	    </li>
	    <li><a href="#Product">Product</a></li>
	    <li><a href="#Help">Help</a></li>
	</ul>
    <span class="app-bar-pullbutton"></span>
</div>

<header>
        <h1 class="animated infinite bounce"><a>Tour End Trevel<small>.com</small></a></h1>
</header>

<div class="main">
        <section class="page one">
                <div class="page-container">
                        <h2 class="animated zoomIn">Tentang Kami</h2>
                        <p class="animated zoomIn">Kami adalah perusahaan yang bergerak dibidang tour end trevel yang melayani berbagai route di indonesia baik manca negara maupun local. kami berdiri pada tahun 2016 dan melayani berbagai orang di seluruh indonesia.</p>
                </div>
        </section>
        

        <section class="page two">
                <div class="page-container">
                	<div class="animated zoomIn">
                       <h3>Destinasion local</h3>
                       <h4>Bali</h4>
                       <h4>Pulau seribu</h4>
                       <h4>Raja empat</h4>
                       <h3>Destinasion Barat</h3>
                       <h4>Jepan</h4>
                       <h4>Korea</h4>
                       <img src="img/1travel.jpg" id="img-1">
                </div>
                </div>
        </section>
        
        <section class="page three">
                <div class="page-container">
                        <h2>Promo<small> &bull; Destinasion</small></h2>
                        <p>Kami mengadakan Promo setiap bulan untuk daerah distinasi local di indonesia</p>
                        
                </div>
        </section>

</div>


    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/metro.js"></script>
    <script type="text/javascript" src="assets/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="assets/js/jquery.onepage-scroll.js"></script>
        <script type="text/javascript">
		$(".main").onepage_scroll({
			sectionContainer: "section",
			easing: "cubic-bezier(0.180, 0.900, 0.410, 1.210)"
		});
		</script>
</body>
</html>
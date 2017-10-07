<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho(Tecnologias para internet 2) primeira unidade</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-default navigation-clean-button" style="background-color:rgb(224,192,25);">
            <div class="container">
                <div class="navbar-header">
                	<?php	                        
	                    if(isset($_SESSION['acesso'])){                            
                    ?>
                	<a href="cadastroEmpresa.php" class="navbar-brand navbar-link"">Divulgue seu negócio</a>
                	<?php
                    	}else{
                    ?>
                	<a class="navbar-brand navbar-link" href="index.html">Encontre o sebosão</a>
                	<?php
                		}
                	?>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">                                                
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:rgb(14,15,16);">Buscar por Zona<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="#">Zona Norte</a></li>
                                <li role="presentation"><a href="#">Zona Sul</a></li>
                                <li role="presentation"><a href="#">Zona Leste</a></li>
                                <li role="presentation"><a href="#">Zona Oeste</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php                        
                        if(isset($_SESSION['login'])){
                            echo "Olá, " . $_SESSION['nome'];
                    ?>                    
                    <li role="presentation"><a href="logout.php">Logout </a></li>
                    <?php } else { ?>
                    <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="login.php">Log In</a> <a class="btn btn-default action-button" role="button" href="cadastroUsuario.php" style="background-color:rgb(198,173,86);">Sign Up</a></p>
                    <?php } ?>                    
                </div>
            </div>
        </nav>
    </div>
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="item active"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                <div class="item"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                <div class="item"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
            </div>
            <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
                data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    <!-- <div class="simple-slider">
        <div class="swiper-container" style="background-image:C:\Users\Família_2\Documents\graduação Desenvolvimento de sistemas\tec. para internet 2\trabaho de tecnologia para internet unidade 1 2017.2\root\images(&quot;assets/img/enhanced-23061-1429741992-5-3.jpg&quot;);">
            <div class="swiper-wrapper" style="background-image:C:\Users\Família_2\Documents\graduação Desenvolvimento de sistemas\tec. para internet 2\trabaho de tecnologia para internet unidade 1 2017.2\root\images(&quot;assets/img/enhanced-23061-1429741992-5-3.jpg&quot;);">
                <div class="swiper-slide" style="background-image:C:\Users\Família_2\Documents\graduação Desenvolvimento de sistemas\tec. para internet 2\trabaho de tecnologia para internet unidade 1 2017.2\root\images(&quot;assets/img/enhanced-23061-1429741992-5-3.jpg&quot;);"></div>
                <div class="swiper-slide" style="background-image:C:\Users\Família_2\Documents\graduação Desenvolvimento de sistemas\tec. para internet 2\trabaho de tecnologia para internet unidade 1 2017.2\root\images(d396b6498f3cda613af5e468fcf6142a0c71d49d6b2a1cfa9bd7bdfaa470684c);"></div>
                <div class="swiper-slide" style="background-image:C:\Users\Família_2\Documents\graduação Desenvolvimento de sistemas\tec. para internet 2\trabaho de tecnologia para internet unidade 1 2017.2\root\images(d396b6498f3cda613af5e468fcf6142a0c71d49d6b2a1cfa9bd7bdfaa470684c);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div> -->
    <div class="footer-basic" style="background-color:rgb(224,192,25);">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <p class="copyright"
            style="color:rgb(20,18,18);">Encontre o sebosão © 2017 Todos os direitos reservados</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
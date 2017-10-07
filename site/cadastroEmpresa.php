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
    <div class="register-photo" style="background-color:rgb(213,173,31);">
        <div class="form-container">
            <div class="image-holder" style="background-image:url('./images/slide1.jpg');"></div>
            <form method="post" action="cadastrarEmpresa.php">
                <?php                    
                    if(isset($_SESSION['erro'])){
                        echo $_SESSION['erro'];
                        unset($_SESSION['erro']);
                    }
                    //session_destroy();
                ?>
                <h2 class="text-center">Divulgue sua empresa</h2>
                <div class="row">		
                    <div class="col-md-12">		
        				<div class="form-group">
                            <input class="form-control" type="text" name="nome" placeholder="Nome da Empresa">
                        </div>
                    </div>				                
                </div>
				<div class="row">       
                    <div class="col-md-12">     
                        <div class="form-group">
                            <input class="form-control" type="text" name="rua" placeholder="Rua">
                        </div>
                    </div>
                </div>
                <div class="row">       
                    <div class="col-md-8">     
                        <div class="form-group">
                            <input class="form-control" type="text" name="bairro" placeholder="Bairro">
                        </div>
                    </div>                
                    <div class="col-md-4">
                        <input class="form-control" type="number" name="numero" placeholder="Nº">
                    </div>
                </div>
                <div class="row">       
                    <div class="col-md-12">     
                        <div class="form-group">
                            <input class="form-control" type="text" name="complemeto" placeholder="Complemento">
                        </div>
                    </div>
                </div>
                <div class="row">       
                    <div class="col-md-12">     
                        <div class="form-group">                            
                            <label>Descrição</label>                    
                        </div>
                    </div>
                </div>
                <div class="row">       
                    <div class="col-md-12">     
                        <div class="form-group">
                            <textarea class="form-control" type="text" name="descricao">
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">       
                    <div class="col-md-12">     
                        <div class="form-group">
                            <input class="form-control" type="number" name="telefone" placeholder="Contato">
                        </div>                                
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" style="background-color:#c9c219;">Divulgar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
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
            <div class="image-holder" style="background-image:url('./images/13509023_1627354767593157_620449553914107564_n.png');"></div>
            <form method="post" action="cadastroUser.php">
            <?php                
                if(isset($_SESSION['erro'])){
                    echo "Ocorreu um erro ao realizar cadastro. <br/>".$_SESSION['error'];
                    unset($_SESSION['erro']);
                }
                //session_destroy();
            ?>
                <h2 class="text-center">Crie sua Conta</h2>
				<div class="form-group">
                    <input class="form-control" type="text" name="nome" placeholder="Nome">
                </div>				
				<div class="form-group">
                    <input class="form-control" type="number" name="cpf" placeholder="CPF">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>				                
                <div class="form-group">
                    <input class="form-control" type="text" name="login" placeholder="Login">
                </div>               
                <div class="form-group">
                    <input class="form-control" type="password" name="senha" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="senha-repeat" placeholder="Password (repeat)">
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label class="control-label">
                            <input type="checkbox" name="proprietario">Tenho uma empresa</label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" style="background-color:#c9c219;">Cadastrar</button>
                </div><a href="login.php" class="already">Já possui cadastro? Faça o login</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
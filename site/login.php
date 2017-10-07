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
    <div class="login-clean">
        <form method="post" action="logar.php">            
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-person-outline" style="color:rgb(207,200,42);"></i></div>
            <div class="form-group">
                <input class="form-control" type="text" name="cpf" placeholder="CPF">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="senha" placeholder="Password">
                <?php
                    session_start();
                    if(isset($_SESSION['erro'])){
                        echo "<span><b style='color:red;'>".$_SESSION['erro']."</b></span>";
                    }
                    session_destroy();
                ?>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(237,208,61);">Log In</button>

            </div><a href="#" class="forgot">Esqueceu E-mail ou senha?</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
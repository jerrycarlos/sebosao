<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
	integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
	crossorigin="anonymous">

<link rel="stylesheet" href="./css/estilo.css">


</head>
<body>
	<div id="content">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="principal" class="rounded">
				<div id="banner">
					<div id="carouselExampleIndicators" class="carousel slide"
						data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0"
								class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active" >
								<img class="d-block w-100" src="img/got1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="img/got2.png" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="img/got3.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators"
							role="button" data-slide="prev"> <span
							class="carousel-control-prev-icon" aria-hidden="true"></span> <span
							class="sr-only">Previous</span>
						</a> <a class="carousel-control-next"
							href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div id="menu">
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item active"><a class="nav-link" href="#">Home
										<span class="sr-only">(current)</span>
								</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Features</a>
								</li>
								<li class="nav-item"><a class="nav-link" href="#">Pricing</a>
								</li>
								<li class="nav-item dropdown"><a
									class="nav-link dropdown-toggle" href="http://example.com"
									id="navbarDropdownMenuLink" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false"> Dropdown link </a>
									<div class="dropdown-menu"
										aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="#">Action</a> <a
											class="dropdown-item" href="#">Another action</a> <a
											class="dropdown-item" href="#">Something else here</a>
									</div></li>
							</ul>
						</div>
					</nav>
				</div>
				<div id="corpo">
                                    <form id="formLogin" action="login.php" method="post" >
					<br/>
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <div class="row linha">
                                                    <div class="col-md-4 alinhadoDireita">
                                                        Login:
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="login" id="login" />
                                                    </div>    
                                                </div>
                                                <div class="row linha">
                                                    <div class="col-md-4 alinhadoDireita">
                                                        Senha:
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="password" name="senha" id="senha"  />
                                                    </div> 
                                                    
                                                </div>
                                                <div class="row linha">
                                                    <div class="col-md-12 alinhadoCentro" >
                                                        <input type="submit" value="Entrar" class="btn btn-primary" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2"></div>
                                           
                                        </div>
                                        </form>
                                        <form action="logout.php" method="post">
                                        	<input type="submit" name="logout" value="logout">
                                        </form>

                                        <form id="formCadastro" action="cadastrar.php" method="post" >
					<br/>
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <div class="row linha">
                                                    <div class="col-md-4 alinhadoDireita">
                                                        Nome:
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="nome" id="nome" />
                                                    </div>    
                                                </div>
                                                <div class="row linha">
                                                    <div class="col-md-4 alinhadoDireita">
                                                        Login:
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="loginCadastro" id="loginCadastro"  />
                                                    </div> 
                                                    
                                                </div>
                                                <div class="row linha">
                                                    <div class="col-md-4 alinhadoDireita">
                                                        Senha:
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="password" name="senhaCadastro" id="senhaCadastro"  />
                                                    </div> 
                                                    
                                                </div>
                                                <div class="row linha">
                                                    <div class="col-md-4 alinhadoDireita" >
                                                        Desrição:
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="descricao" id="descricao"  />
                                                    </div> 
                                                    
                                                </div>
                                                <div class="row linha">
                                                    <div class="col-md-4 alinhadoDireita">
                                                        Fone:
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="fone" id="fone"  />
                                                    </div> 
                                                    
                                                </div>
                                                <div class="row linha">
                                                    <div class="col-md-12 alinhadoCentro" >
                                                        <input type="submit" value="Cadastrar" class="btn btn-primary" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2"></div>
                                           
                                        </div>
                                        </form>
				</div>
				<div id="rodape" style="text-align: center; height: 50px;">
					RODAPE</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
		integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
		crossorigin="anonymous"></script>
</body>
</html>
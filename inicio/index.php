<?php 
    session_start();
    include_once('../conexao.php');
    include_once('../usuario.php');
    if (!isset ($_SESSION['email'])){
        header("Location: ../login_cadastro/index.php");
        exit;
    }
    else{
        $nome = $_SESSION['nome'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verona</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-blur fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../imagens/logo1.png" id="logop"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                    <a class="nav-link active text-white FonteLink" aria-current="page" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link text-white FonteLink" href="#">Sobre</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link text-white FonteLink" href="#">Cardápio</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link text-white FonteLink" href="#">Novidade da semana</a>
                    </li>
                    <li class="nav-item me-5">
                    <a class="nav-link text-white FonteLink" href="#">FAQ</a>
                    </li>
                    <li class="nav-item dropdown me-5">
                    <a class="nav-link dropdown-toggle text-white FonteLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo "Olá, $nome!"?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Meu perfil</a></li>
                        <li><a class="dropdown-item" href="../login_cadastro/index.php">Sair</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div id="inicio">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../imagens/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="../imagens/slide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="../imagens/slide3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div id="sobre">
            <div class="principal">
                <div class="esquerda">
                    <h1 id="tx1">Verona - A elegância italiana em pleno palco carioca</h1><br>
                    <p id="p1">O Verona nasceu para trazer a tradição das cafeterias italianas a um novo cenário: o palco carioca. Aqui, cada detalhe — da intensidade do espresso ao brilho das cortinas vermelhas — foi pensado para transformar o café em uma verdadeira apresentação.
                        Com rigor, sofisticação e um ambiente que convida a desacelerar, nossas bebidas são preparadas para oferecer mais do que sabor: oferecem experiência.
                        No Verona, o café deixa de ser rotina e se torna espetáculo.
                        Descubra a elegância italiana interpretada no coração do Rio de Janeiro.</p>
                        <hr>
                    <img src="../imagens/logo3.png" alt="logo Verona" id="logover">
                </div>
                <div class="direita sobre"></div>
            </div>
            
        </div>

        <div id="cardapio">
            <h1 id="tx2">Cardápio</h1>
            <div id="acao">
                <!--Parte do botão - call to action" (CTA)-->
                <div class="principal acao">
                    <div class="esquerda"><p id="p2" class="FonteLink text-white">Já escolheu o seu?</p></div>
                    <div class="direita">
                        <button type="button" id="botao"><a href="#fpedido" id="abotao">Fazer pedido!</a></button>
                    </div>
                </div>
            </div>
            <br>
            <div class="row row-cols-1 row-cols-md-3 g-4 cards">
                <div class="col">
                    <div class="card">
                    <img src="../imagens/espresso.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Espresso Verona</h5>
                        <p class="card-text">Intenso e aromático, preparado com grãos selecionados para um sabor marcante.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="../imagens/cappuccino.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cappuccino Cremoso</h5>
                        <p class="card-text">Clássico e aconchegante, com leite vaporizado e espuma no ponto perfeito.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="../imagens/matcha.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Matcha Latte Gelado</h5>
                        <p class="card-text">Leve e refrescante, com matcha suave batido no leite gelado para energia instantânea.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="../imagens/caramelo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Iced Latte Caramelo</h5>
                        <p class="card-text">Café suave com leite gelado e um toque de caramelo que refresca e adoça na medida.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="../imagens/tiramissu.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tiramissu da Casa</h5>
                        <p class="card-text">Clássico italiano com textura macia e sabor delicadamente adocicado.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="../imagens/martini.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Espresso Martini Verona</h5>
                        <p class="card-text">Vodka, licor de café e espresso — forte, elegante e irresistível.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
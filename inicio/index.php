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
                    <a class="nav-link active text-white FonteLink" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link text-white FonteLink" href="#">Cardápio</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link text-white FonteLink" href="#">Fazer pedido</a>
                    </li>
                    <li class="nav-item me-5">
                    <a class="nav-link text-white FonteLink" href="#">Meus pedidos</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
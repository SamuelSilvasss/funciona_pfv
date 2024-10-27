<!doctype html>
<html lang="pt-br">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Exemplo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- Importação do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Inclusão do JavaScript -->
    <script src="{{ asset('js/scriptsprodutos.js') }}"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="images/logo_cb.png" alt="Logo" class="logo-image">
            </a>

            <!-- Botão do Menu Colapsável -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links do Menu (Colapsáveis) -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('mercados') }}">Mercados</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" aria-current="page" href="{{ route('produtos') }}">
                            Produtos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('cadastro_produto') }}">Cadastrar Produto</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Ícone da Conta -->
            <a href="{{ route('register') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('images/conta_tcc.png') }}" alt="Conta" class="conta-image">
            </a>
        </div>
    </nav>

    @auth
    <div class="container text-center mt-3">
        <p class="alert alert-success">Bem-vindo, {{ Auth::user()->name }}!</p>
    </div>
    @endauth
    @guest
    <div class="container text-center mt-3">
        <p class="alert alert-danger">Você não está logado.</p>
    </div>
    @endguest

    <!-- Barra de Pesquisa e opções -->
    <div class="container text-center mt-4">
        <form action="{{ route('search') }}" class="d-inline" method="GET">
            <div class="input-group input-group-lg">
                <select name = "pesquisaProdutos" class="form-select" aria-label="Default select example">
                    <option value ="0">Selecione o produto que deseja pesquisar:</option>
                    <option value="Achocolatado">Achocolatado</option>
                    <option value="Açúcar">Açúcar</option>
                    <option value="Arroz">Arroz</option>
                    <option value="Bolacha">Bolacha</option>
                    <option value="Bombril">Bombril</option>
                    <option value="Café">Café</option>
                    <option value="CremeDeLeite">Creme de Leite</option>
                    <option value="Detergente">Detergente</option>
                    <option value="FarinhaDeTrigo">Farinha de Trigo</option>
                    <option value="FarinhaTemperada">Farinha Temperada</option>
                    <option value="Feijão">Feijão</option>
                    <option value="Leite">Leite</option>
                    <option value="LeiteCondensado">Leite Condensado</option>
                    <option value="Macarrão">Macarrão</option>
                    <option value="MolhoDeTomate">Molho de Tomate</option>
                    <option value="Oleo">Óleo</option>
                    <option value="Papel">Papel</option>
                    <option value="Pasta">Pasta de Dente</option>
                    <option value="Sabão">Sabão</option>
                    <option value="Sabonete">Sabonete</option>
                    <option value="Suco">Suco</option>
                </select>
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="bi bi-search">Pesquisar</i>
                </button>
            </div>
        </form>
    </div>

    <!-- Banner Rotativo -->
    <div id="bannerCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner.jpeg" class="d-block w-100" alt="Banner 1">
            </div>

            </div>
        </div>

<!-- Melhores Ofertas -->
<div class="container mt-5">
<h2 class="text-center mb-4">Principais Produtos</h2>
        
<!-- Primeira linha de produtos -->
<div class="row">
    <!-- Produto 1 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="card text-left h-100">
            <img src="images/arroz_home.png" class="card-img-top" alt="Cebola a Granel">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Arroz Camil 5kg</p>
                <p class="card-price">R$5,19</p>
                <a href="arroz">
                <button class="btn btn-success mt-auto">SAIBA MAIS</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Produto 2 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="card text-left h-100">
            <img src="images/arroz_home2.png" class="card-img-top" alt="Uva Clara">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Arroz Tio João 5kg</p>
                <p class="card-price">R$14,90</p>
                <a href="arroz">
                <button class="btn btn-success mt-auto">SAIBA MAIS</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Produto 3 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="card text-left h-100">
            <img src="images/feijao_home.png" class="card-img-top" alt="Banana Nanica">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Feijão Camil 1kg</p>
                <p class="card-price">R$8,49</p>
                <a href="feijao">
                <button class="btn btn-success mt-auto">SAIBA MAIS</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Produto 4 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="card text-left h-100">
            <img src="images/feijao_home2.png" class="card-img-top" alt="Caqui Ramaforte">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Feijão Kicaldo 1kg</p>
                <p class="card-price">R$14,90</p>
                <a href="feijao">
                <button class="btn btn-success mt-auto">SAIBA MAIS</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Produto 5 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="card text-left h-100">
            <img src="images/acucar_home.png" class="card-img-top" alt="Uva Preta">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Açúcar União 1kg</p>
                <p class="card-price">R$15,90</p>
                <a href="acucar">
                <button class="btn btn-success mt-auto">SAIBA MAIS</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Produto 6 -->
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="card text-left h-100">
            <img src="images/acucar_home2.png" class="card-img-top" alt="Maçã Gala">
            <div class="card-body d-flex flex-column">
                <p class="card-text">Açúç. Caravelas</p>
                <p class="card-price">R$9,90</p>
                <a href="acucar">
                <button class="btn btn-success mt-auto">SAIBA MAIS</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Linha de produtos apenas com imagens clicáveis -->
<div class="row mt-4 justify-content-center">
    <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex justify-content-center">
        <a href="produtos_alimentos">
            <img src="images/esperanca.png" alt="Produto 1" class="img-fluid product-image rounded">
        </a>
    </div>
    <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex justify-content-center">
        <a href="produtos_limpeza">
            <img src="images/esperanca2.png" alt="Produto 2" class="img-fluid product-image rounded">
        </a>
    </div>
    <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex justify-content-center">
        <a href="produtos_higiene">
            <img src="images/esperanca3.png" alt="Produto 3" class="img-fluid product-image rounded">
        </a>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="bg-dark text-light pt-5 pb-4" style="font-family: 'Montserrat', sans-serif;">
    <div class="container">
        <div class="row text-center text-md-start justify-content-center">
            <!-- Logo -->
            <div class="col-12 col-sm-6 col-md-2 mb-4 d-flex justify-content-center align-items-center">
    <img src="images/logo_cb.png" alt="Logo" class="img-fluid footer-logo">
</div>


            <!-- Sobre Nós -->
            <div class="col-12 col-sm-6 col-md-3 mb-4 d-flex flex-column align-items-center align-items-md-start">
                <h5 class="footer-title text-uppercase text-primary">Sobre Nós</h5>
                <p class="text-center text-md-start">Nosso compromisso é comparar e oferecer as melhores opções de produtos, unindo qualidade e preços acessíveis para ajudar você a fazer a melhor escolha.</p>
            </div>

            <!-- Links do Site -->
            <div class="col-12 col-sm-6 col-md-2 mb-4 d-flex flex-column align-items-center align-items-md-start">
                <h5 class="footer-title text-uppercase text-primary">Links do Site</h5>
                <ul class="list-unstyled text-center text-md-start">
                    <li><a href="{{ route('home') }}" class="text-light">Início</a></li>
                    <li><a href="{{ route('mercados') }}" class="text-light">Mercados</a></li>
                    <li><a href="{{ route('produtos') }}" class="text-light">Produtos</a></li>
                    <li><a href="{{ route('cadastro_produto') }}" class="text-light">Cadastrar Produto</a></li>
                </ul>
            </div>

            <!-- Contato -->
            <div class="col-12 col-sm-6 col-md-3 mb-4 d-flex flex-column align-items-center align-items-md-start">
                <h5 class="footer-title text-uppercase text-primary">Contato</h5>
                <div class="contact-info d-flex align-items-center">
                    <i class="fas fa-envelope me-2"></i>
                    <span>cbcompare.bem@gmail.com</span>
                </div>
            </div>

            <!-- Redes Sociais -->
            <div class="col-12 col-sm-6 col-md-2 mb-4 d-flex flex-column align-items-center align-items-md-start">
                <h5 class="footer-title text-uppercase text-primary">Siga-nos</h5>
                <div class="social-icons d-flex align-items-center">
                    <a href="https://www.instagram.com/cbcompare.bem/" class="text-light">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr class="bg-light">

        <div class="row text-center text-md-start">
            <div class="col-12 col-md-8 mb-2 mb-md-0">
                <p>© 2024 <span class="text-primary fw-bold">Compare Bem</span></p>
            </div>
            <div class="col-12 col-md-4 text-center text-md-end">
                <p>Desenvolvido por <span class="text-primary fw-bold">Jobson, Samuel, João Vitor e Raphaela</span></p>
            </div>
        </div>
    </div>
</footer>

<!-- Font Awesome (para ícones de redes sociais) -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


</body>

</html>
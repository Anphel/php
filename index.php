<?php
include 'src/config.php';
require 'src/class/Banco.php';
require 'src/class/CPF.php';
require 'src/class/Pessoa.php';
require 'src/class/Login.php';

$banco = new Banco($mysql);
var_dump($banco->lerDados());
$pessoa = new Pessoa('Andr3',new CPF('100.731.139-87'),'andreph10@hotmail.com','123');
$banco->insereDados($pessoa);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>banco TEST</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script><link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    </head>
<header>
</header>
<body>
        <!--NAVBAR-->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <img class="navbar-ico" src="media/parisIco.jpg" alt="" width="40" height="40">
        <a class="navbar-brand" href="index.php">Paris Beauty Center</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#navbar">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Promocoes">Promocoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Nossas_profissionais">Nossas profissionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Sobre">Sobre nos</a>
                </li>
                <ul class="navbar-nav" id="social_nav">
                <li class="nav-item"><img class="navbar-ico" src="media/social/001-youtube.png" alt="" width="30" height="30"></li>
                <li class="nav-item"><img class="navbar-ico" src="media/social/036-facebook.png" alt="" width="30" height="30"></li>
                <li class="nav-item"><img class="navbar-ico" src="media/social/029-instagram.png" alt="" width="30" height="30"></li>
                <li class="nav-item"><img class="navbar-ico" src="media/social/008-twitter.png" alt="" width="30" height="30"></li>
                </ul>
            </ul>
        </div>
        </nav>
    </div>

        <!--SLIDER-->
        <div class="container-fluid" >
    <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="media/port1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="media/port2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="media/port3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="media/port4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden" >Next</span>
    </button>
</div>
        </div>
        <!--PROMO CONTENT-->
        <div class="container-fluid" >
        <div class="row row-cols-auto justify-content-md-center" id="text-frame" >
        <div class="col-3"></div>
        <div class="col-5"><h2 class="display-2" id="Promocoes" >Promocoes</h2></div>
        <div class="col-3"></div>
        </div>
    </div>
        <div class="row row-cols-auto justify-content-md-center" id="promo_content">
        <div class="col">
            <div class="card text-white bg-dark mb-3" style="width: 25rem;">
        <img src="media/promo1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
        <p class="card-text">Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. In elementis mé pra quem é amistosis quis leo.</p>
            </div>
            </div>
    </div>
        <div class="col">
        <div class="card text-white bg-dark mb-3" style="width: 25rem;">
        <img src="media/promo2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Mussum Ipsum, cacilds vidis litro abertis. Mé faiz elementum girarzis, nisi eros vermeio. Mauris nec dolor in eros commodo tempor.</p>
        </div>
    </div>
        </div>
        <div class="col">
            <div class="card text-white bg-dark mb-3" style="width: 25rem;">
                <img src="media/promo3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Mussum Ipsum, cacilds vidis litro abertis. Mé faiz elementum girarzis, nisi eros vermeio. Mauris nec dolor in eros commodo tempor.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-dark mb-3" style="width: 25rem;">
                <img src="media/promo4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Mussum Ipsum, cacilds vidis litro abertis. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.</p>
                </div>
            </div>
        </div>
    </div>

        <!--OUR MEMBERS CONTENT-->
        <div class="container-fluid">
        <div class="row row-cols-auto justify-content-md-center" id="text-frame" >
        <div class="col-3"></div>
        <div class="col-5"><h2 class="display-2" id="Nossas_profissionais">Profissionais</h2></div>
        <div class="col-3"></div>

    </div>
        <div class="row row-cols-auto justify-content-md-center">
        <div class="col">
            <div class="card mb-3 text-light bg-dark" style="max-width: 740px; max-height: 700px">
                <div class="row row-cols-2">
                    <div class="col-md-4">
                        <img src="media/jeca1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Jessica</h2>
                            <p class="card-text"><hr>   Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Mé faiz elementum girarzis, nisi eros vermeio. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 text-light bg-dark" style="max-width: 740px; max-height: 700px" >
                <div class="row row-cols-2">
                    <div class="col-md-4">
                        <img src="media/renata1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Renata</h2>
                            <p class="card-text"><hr>Quem num gosta di mim que vai caçá sua turmis! Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Suco de cevadiss deixa as pessoas mais interessantis. Cevadis im ampola pa arma uma pindureta.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
        </div>
        <!--ABOUT CONTENT-->
        <div class="container-fluid">
        <div class="row row-cols-auto justify-content-md-center" id="text-frame" >
        <div class="col-3"></div>
        <div class="col-5"><h2 class="display-2" id="Sobre">Sobre nos</h2></div>
        <div class="col-3"></div>

    </div>
        <div class="row justify-content-md-center" id="About_content">
            <div class="col">
                <img src="media/parisAbout.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col">
                <p class="h5">  Mussum Ipsum, cacilds vidis litro abertis. Atirei o pau no gatis, per gatis num morreus. Diuretics paradis num copo é motivis de denguis. Suco de cevadiss deixa as pessoas mais interessantis. Quem num gosta di mim que vai caçá sua turmis!</p>
            </div>
        </div>
            </div>
</body>
        <!--FOOTER CONTENT-->
<footer>
    <div class="container-fluid">
    <div class="row row-cols-auto justify-content-md-center" id="text-frame" >
        <div class="col-12"></div>
    </div>
    <div class="row justify-content-md-center" id="footer_content">
        <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28832.40797184697!2d-49.33506905591979!3d-25.40310351221204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce1b005c23cc1%3A0x611018da1b11cae0!2sAv.%20Ver.%20Toaldo%20T%C3%BAlio%2C%20420%20-%20Santa%20Felicidade%2C%20Curitiba%20-%20PR%2C%2082320-010!5e0!3m2!1spt-BR!2sbr!4v1619977957965!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </div>
        <div class="col">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#navbar">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Promocoes">Promocoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Nossas_profissionais">Nossas profissionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Sobre">Sobre nos</a>
                </li>
            </ul>
            <div id="social_footer">
            <div class="row row-cols-auto">
            <a class="col" href="#">
                <img class="navbar-ico" src="media/social/001-youtube.png" alt="" width="30" height=30">
            </a>
            <a class="col" href="#">
                <img class="navbar-ico" src="media/social/008-twitter.png" alt="" width="30" height=30">
            </a>
            <a class="col" href="#">
                <img class="navbar-ico" src="media/social/029-instagram.png" alt="" width="30" height=30">
            </a>
            <a class="col" href="#">
                <img class="navbar-ico" src="media/social/036-facebook.png" alt="" width="30" height=30">
            </a>
            </div>
        </div>
        </div>
        <div class="col">
            <p class="h5">  Mussum Ipsum, cacilds vidis litro abertis. Atirei o pau no gatis, per gatis num morreus. Diuretics paradis num copo é motivis de denguis.</p>
        </div>
        </div>
    </div>

</footer>

</html>


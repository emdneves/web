<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORTEN</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONTS - OPEN SANS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!--link rel="stylesheet" href="css/bootstrap.min.css"-->

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- MEU CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="container-fluid text-center">
        <img src="img/logo.png" alt="">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobrenos.html">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produtos.html">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="promocoes.html">Promoções</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container shadow mb-3 roudend text-center">
        <div class="row">
            <div class="col-12 col-md-6 px-4">
                <iframe class="w-100" height="450"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48046.50069942502!2d-8.720906268750012!3d41.180211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2465f41da3e0fd%3A0xf4dfb56e4460e634!2sWorten!5e0!3m2!1spt-PT!2spt!4v1679991576277!5m2!1spt-PT!2spt"
                    width="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-12 col-md-6 my-auto">
                <div class="row">
                    <div class="col"><i class="bi bi-house"></i>
                        <p>Norte Shopping, R. Sara Afonso Loja 112, 4460-841 Sra. da Hora</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col"><i class="bi bi-alarm"></i>
                        <p>domingo a segunda 10:00 - 24:00</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col"><i class="bi bi-telephone"></i>
                        <p>210 155 222</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <p>contacte-nos</p>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">contacto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="nome@exemplo.com">
                                </div>
                                <!-- formulário de contacto-->
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">mensagem</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn" data-bs-dismiss="modal">cancelar</button>
                                <button type="button" class="btn btn">enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
    <footer class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 text-center p-3">
                © WORTEN - EQUIPAMENTOS PARA O LAR, S.A
            </div>
            <div class="col-12 col-md-6 text-center p-3">
                <a href="https://www.facebook.com/wortenpt/" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://twitter.com/WortenPT" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.instagram.com/wortenpt/?hl=pt" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/worten/" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.twitch.tv/wortenpt" target="_blank"><i class="bi bi-twitch"></i></a>
                <a href="https://www.youtube.com/c/worten" target="_blank"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </footer>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <!--script src="js/bootstrap.bundle.min.js"></!--script-->
</body>

</html>
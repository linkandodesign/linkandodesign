<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="A Linkando Design é um estúdio especializado em Design de Marcas, Identidade Visual UI & UX e Social Media. Criamos projetos que te destaca e torna único! #design #marca #logo">
    <link rel="shortcut icon" type="image/png" href="<?= IMG ?>/favico.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@6.7.0/keen-slider.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= CSS ?>/all.min.css">
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <title><?= $title ?></title>
    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-WPBG5YWWR2"></script> -->
    <script>
        // window.dataLayer = window.dataLayer || [];
        // function gtag(){dataLayer.push(arguments);}
        // gtag('js', new Date());

        // gtag('config', 'G-WPBG5YWWR2');
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/home">
                <img class="img-fluid" src="<?= IMG ?>/logo.webp" alt="logo, logotipo menu" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-lg-4">
                        <a class="nav-link text-center <?= $active['home'] == true ? 'cor-amarela' : '' ?>" href="/home">Home</a>
                    </li>
                    <li class="nav-item ms-lg-4">
                        <a class="nav-link text-center <?= $active['portfolio'] == true ? 'cor-amarela' : '' ?>" href="/portfolio">Portfólio</a>
                    </li>
                    <li class="nav-item ms-lg-4">
                        <a class="nav-link text-center <?= $active['contato'] == true ? 'cor-amarela' : '' ?>" href="/contato">Contato</a>
                    </li>
                    <li class="nav-item ms-lg-4">
                        <a class="nav-link text-center <?= $active['orcamento'] == true ? 'cor-amarela' : '' ?>" href="/orcamento">Orçamento</a>
                    </li>
                    <li class="nav-item ms-lg-4">
                        <a class="nav-link text-center <?= $active['loja'] == true ? 'cor-amarela' : '' ?>" href="/loja">Loja</a>
                    </li>
                    <li class="nav-item ms-lg-4">
                        <a class="nav-link text-center <?= $active['duvidas'] == true ? 'cor-amarela' : '' ?>" href="/duvidas">Dúvidas</a>
                    </li>
                </ul>
                <div class="text-center mb-4 mb-lg-0">
                    <a class="text-center me-4" target="_blank" href="https://www.instagram.com/linkandodesign/">
                        <img class="img-social img-fluid" src="<?= IMG ?>/icone-insta.webp" alt="Imagem instagram">
                    </a>
                    <a class="text-center" target="_blank" href="https://www.behance.net/linkandodesign">
                        <img class="img-social img-fluid" src="<?= IMG ?>/icone-behance.webp" alt="Imagem behance">
                    </a>
                </div>
            </div>
        </div>
    </nav>
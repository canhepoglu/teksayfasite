<?php
include_once "ayar.php";

?>

<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Bootstrap Icons CSS-->
    <link href="./css/bootstrap-icons.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="./css/style.css" rel="stylesheet">




    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css'>
    <title>Can Hepoğlu Bootstrap Template</title>

</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-md navbar-dark bg-danger py-3">
            <div class="container ">
                <a class="navbar-brand" href="#">CH</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#latest">Latest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#vlog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#approach">Approach</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#urunler">Ürünler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="home" class="pt-5">
        <div class="container-fluid p-0">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <!--<div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>-->
                <div class="carousel-inner">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM `slider`");
                    $a = 0;
                    while ($b = mysqli_fetch_array($sql)) {

                        $id = $b['id'];

                        $slideradi = $b['slideradi'];
                        $resim = $b['resim'];
                        $interval = $b['interval'];
                        if ($a == 0) {
                            echo "<div class=\"carousel-item active\" data-bs-interval=\"$interval\">
                                <img src=\"image/$resim\" class=\"d-block w-100\" alt=\"$slideradi\"></div>";
                        } else {
                            echo "<div class=\"carousel-item \" data-bs-interval=\"$interval\">
                                <img src=\"image/$resim\" class=\"d-block w-100\" alt=\"$slideradi\"></div>";
                        }
                        $a++;
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!--
    <section class="dark-bg" id="hero">
        <div class="container">
            <div class="d-flex h-100 flex-column text-light justify-content-center">
                <h1 class="display-1"><span class="text-danger">C</span>'an<span class="text-danger">H</span>'epoğlu
                </h1>
                <p class="lead">Lorem Ipsum is simply dummy <span class="text-danger">text of the printing and
                        typesetting</span> industry.</p>
            </div>
        </div>
    </section>
-->

    <section class="generic" id="about">
        <div class="container-fluid">
            <h2 class="display-5 text-danger mb-5">WHO WE ARE</h2>
            <div class="row mb-3">
                <div class="col-sm-12 col-md-8 bg-light">
                    <div class="d-flex h-100 flex-column justify-content-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-0">
                    <img class="img-fluid" src="image/company.jpg" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-8 bg-light">
                    <div class="d-flex h-100 flex-column justify-content-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-0 order-first ">
                    <img class="img-fluid" src="image/company2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- LATEST SECTION -->

    <section class="generic" id="latest">
        <div class="container">
            <h2 class="display-5 text-danger mb-5">WHO WE DO</h2>
        </div>
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="latest-item">
                        <button class="btn btn-primary p-0 rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#itemDetail1" aria-expanded="false" aria-controls="collapseExample">
                            <img src="image/1.jpg" class="img-fluid">
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <i class="bi bi-chevron-double-down"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="latest-item">
                        <button class="btn btn-primary p-0 rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#itemDetail2" aria-expanded="false" aria-controls="collapseExample">
                            <img src="image/2.jpg" class="img-fluid">
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <i class="bi bi-chevron-double-down"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="latest-item">
                        <button class="btn btn-primary p-0 rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#itemDetail3" aria-expanded="false" aria-controls="collapseExample">
                            <img src="image/3.jpg" class="img-fluid">
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <i class="bi bi-chevron-double-down"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="latest-item">
                        <button class="btn btn-primary p-0 rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#itemDetail4" aria-expanded="false" aria-controls="collapseExample">
                            <img src="image/4.jpg" class="img-fluid">
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <i class="bi bi-chevron-double-down"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="collapse" id="itemDetail1">
                    <div class="container-fluid p-0 mt-3">
                        <div class="row p-0 shadow">
                            <div class="col-sm-6 col-lg-3 p-0">
                                <button type="button" class="btn-close" aria-label="Close" data-bs-toggle="collapse" data-bs-target="#itemDetail1" aria-expanded="false" aria-controls="collapseExample"></button>
                                <dl class="row ps-5">
                                    <dt class="col-12"> <span class="text-danger lead">PROJECT NAME 1</span></dt>
                                    <dt class="col-4">CLIENT</dt>
                                    <dd class="col-8">ABC Company</dd>
                                    <dt class="col-4">CATEGORY</dt>
                                    <dd class="col-8">Branding</dd>
                                    <dt class="col-4">DURATION</dt>
                                    <dd class="col-8">2 WEEKS</dd>
                                </dl>
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/5.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/6.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/7.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="itemDetail2">
                    <div class="container-fluid p-0 mt-3">
                        <div class="row p-0 shadow">
                            <div class="col-sm-6 col-lg-3 p-0">
                                <button type="button" class="btn-close" aria-label="Close" data-bs-toggle="collapse" data-bs-target="#itemDetail2" aria-expanded="false" aria-controls="collapseExample"></button>
                                <dl class="row ps-5">
                                    <dt class="col-12"> <span class="text-danger lead">PROJECT NAME 2</span></dt>
                                    <dt class="col-4">CLIENT</dt>
                                    <dd class="col-8">ABC Company</dd>
                                    <dt class="col-4">CATEGORY</dt>
                                    <dd class="col-8">Branding</dd>
                                    <dt class="col-4">DURATION</dt>
                                    <dd class="col-8">2 WEEKS</dd>
                                </dl>
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/6.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/7.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/5.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="itemDetail3">
                    <div class="container-fluid p-0 mt-3">
                        <div class="row p-0 shadow">
                            <div class="col-sm-6 col-lg-3 p-0">
                                <button type="button" class="btn-close" aria-label="Close" data-bs-toggle="collapse" data-bs-target="#itemDetail3" aria-expanded="false" aria-controls="collapseExample"></button>
                                <dl class="row ps-5">
                                    <dt class="col-12"> <span class="text-danger lead">PROJECT NAME 3</span></dt>
                                    <dt class="col-4">CLIENT</dt>
                                    <dd class="col-8">ABC Company</dd>
                                    <dt class="col-4">CATEGORY</dt>
                                    <dd class="col-8">Branding</dd>
                                    <dt class="col-4">DURATION</dt>
                                    <dd class="col-8">2 WEEKS</dd>
                                </dl>
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/7.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/5.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/6.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="itemDetail4">
                    <div class="container-fluid p-0 mt-3">
                        <div class="row p-0 shadow">
                            <div class="col-sm-6 col-lg-3 p-0">
                                <button type="button" class="btn-close" aria-label="Close" data-bs-toggle="collapse" data-bs-target="#itemDetail4" aria-expanded="false" aria-controls="collapseExample"></button>
                                <dl class="row ps-5">
                                    <dt class="col-12"> <span class="text-danger lead">PROJECT NAME 4</span></dt>
                                    <dt class="col-4">CLIENT</dt>
                                    <dd class="col-8">ABC Company</dd>
                                    <dt class="col-4">CATEGORY</dt>
                                    <dd class="col-8">Branding</dd>
                                    <dt class="col-4">DURATION</dt>
                                    <dd class="col-8">2 WEEKS</dd>
                                </dl>
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/5.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/6.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-6 col-lg-3 p-0">
                                <img src="image/7.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--
    <section id="acilirblog" class="generic">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-4">
                    <div class="d-grid py-5">
                        <button type="button" class="btn btn-danger rounded-0 py-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="image/1.jpg" class="card-img-top rounded-0">
                        </button>
                        <div class="card-body ps-3">
                            <h5 class="lead text-uppercase text-danger mb-4">
                                5 OUTRAGEUS IDEAS FOR YOUR TECHNOLOGY
                            </h5>
                            <h6 class="card-title text-uppercase text-danger">
                                ARMANDO DIEGO
                            </h6>
                            <p class="card-text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. </p>
                            <ul class="list-inline">
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <i class="bi bi-clock">
                                            <span class="align-middle">
                                                2 Days Ago |
                                            </span>
                                        </i>
                                    </small>
                                </list>
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <span class="aling-middle">
                                            <i class="bi bi-chat-left-text">
                                                10
                                            </i>
                                        </span>
                                    </small>
                                </list>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-grid py-5">
                        <button type="button" class="btn btn-danger rounded-0 py-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="image/2.jpg" class="card-img-top rounded-0">
                        </button>
                        <div class="card-body ps-3">
                            <h5 class="lead text-uppercase text-danger mb-4">
                                5 OUTRAGEUS IDEAS FOR YOUR TECHNOLOGY
                            </h5>
                            <h6 class="card-title text-uppercase text-danger">
                                ARMANDO DIEGO
                            </h6>
                            <p class="card-text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. </p>
                            <ul class="list-inline">
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <i class="bi bi-clock">
                                            <span class="align-middle">
                                                2 Days Ago |
                                            </span>
                                        </i>
                                    </small>
                                </list>
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <span class="aling-middle">
                                            <i class="bi bi-chat-left-text">
                                                10
                                            </i>
                                        </span>
                                    </small>
                                </list>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-grid py-5">
                        <button type="button" class="btn btn-danger rounded-0 py-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="image/3.jpg" class="card-img-top rounded-0">
                        </button>
                        <div class="card-body ps-3">
                            <h5 class="lead text-uppercase text-danger mb-4">
                                5 OUTRAGEUS IDEAS FOR YOUR TECHNOLOGY
                            </h5>
                            <h6 class="card-title text-uppercase text-danger">
                                ARMANDO DIEGO
                            </h6>
                            <p class="card-text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. </p>
                            <ul class="list-inline">
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <i class="bi bi-clock">
                                            <span class="align-middle">
                                                2 Days Ago |
                                            </span>
                                        </i>
                                    </small>
                                </list>
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <span class="aling-middle">
                                            <i class="bi bi-chat-left-text">
                                                10
                                            </i>
                                        </span>
                                    </small>
                                </list>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    -->
    <?php if (array_key_exists('buttondevam', $_POST)) {
        buttondevam();
    }
    function buttondevam()
    {
        echo "This is Button1 that is selected";
    } ?>
    <section id="vlog" class="generic">
        <div class="container-fluid">
            <h2 class="display-5 text-danger mb-1">WHAT WE SAY</h2>

            <?php
            $sql = mysqli_query($conn, "SELECT * FROM `makaleler`");
            $a = 0;
            while ($b = mysqli_fetch_array($sql)) {

                $id = $b['id'];

                $makaleresmi = $b['makaleresmi'];
                $makalebaslik = $b['makalebaslik'];
                $makale = $b['makale'];
                $yazar = $b['yazar'];
                $yuklenmetarihi = $b['yuklenmetarihi'];
            ?>
                <div class="modal fade" id="exampleModalblog<?= $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-body">
                                <h5 class="lead text-danger mt-2"><?= $makalebaslik ?></h5>
                                <p><?= $makale ?> </p>
                                <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-warning rounded-0">LINKEDIN</button>
                                    <button type="button" class="btn btn-success rounded-0">FACEBOOK</button>
                                    <button type="button" class="btn btn-info rounded-0">TWITTER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="wrapperslider">
                <div class="carouselb">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM `makaleler`");
                    $a = 0;

                    function kisaltma($kelime, $str = 10)
                    {
                        if (strlen($kelime) > $str) {
                            if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8") . '..';
                            else $kelime = substr($kelime, 0, $str) . '..';
                        }
                        return $kelime;
                    }

                    while ($b = mysqli_fetch_array($sql)) {

                        $id = $b['id'];

                        $makaleresmi = $b['makaleresmi'];
                        $makalebaslik = $b['makalebaslik'];
                        $makale = $b['makale'];
                        $yazar = $b['yazar'];
                        $yuklenmetarihi = $b['yuklenmetarihi'];
                    ?>

                        <div class="col-md-6 col-lg-4">

                            <div class="d-grid ">
                                <div id="cardimage">
                                    <img src="image/<?= $makaleresmi ?>" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body ps-3">
                                    <h5 class="lead text-uppercase text-danger mb-4">
                                        <?= $makalebaslik ?>
                                    </h5>
                                    <p class="card-text">
                                    <div class="devaminioku" data-bs-toggle="modal" data-bs-target="#exampleModalblog<?= $id ?>">
                                        <?=
                                        $makale = substr($makale, 0, 90);
                                        echo $makale; ?>
                                        <div class="devamyazi btn" name="buttondevam">DEVAMINI OKU</div>
                                    </div>
                                    </p>
                                    <h6 class="card-title text-uppercase text-danger">
                                        <?= $yazar ?>
                                    </h6>

                                    <ul class="list-inline">
                                        <list class="list-inline-item">
                                            <small class="text-muted">
                                                <i class="bi bi-clock">
                                                    <span class="align-middle">
                                                        <?= $yuklenmetarihi ?>
                                                    </span>
                                                </i>
                                            </small>
                                        </list>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>






        </div>
    </section>
    <style>
        .wrapperslider {
            width: 100%;
            padding-top: 20px;
            text-align: center;
        }

        .carouselb {
            width: 90%;
            margin: 0px auto;
        }

        .slick-slide {
            margin: 10px;
        }

        .slick-slide img {
            width: 100%;
            border: 2px solid #fff;
        }

        .wrapperslider .slick-dots li {
            display: none;
        }

        .wrapperslider .slick-dots li button:before {
            font-size: 20px;
            color: #dc3545 !important;
        }

        .slick-arrow {
            background-color: #dc3545 !important;
        }

        #cardimage {
            background: rgba(189, 61, 75, .9);
        }
    </style>

    <!-- BLOG SECTION -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css'>

    <!--
    <section id="vlog" class="generic">
        <div class="container">
            <h2 class="display-5 text-danger ">WHAT WE SAY</h2>
            <div class="row">

                <div class="col-md-6 col-lg-4">
                    <div class="d-grid py-5">
                        <img src="image/1.jpg" class="card-img-top rounded-0">
                        <div class="card-body ps-3">
                            <h5 class="lead text-uppercase text-danger mb-4">
                                BLOG BAŞLIK
                            </h5>
                            <h6 class="card-title text-uppercase text-danger">
                                ARMANDO DIEGO
                            </h6>
                            <p class="card-text">
                            <div class="devaminioku" data-bs-toggle="modal" data-bs-target="#exampleModalblog1">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                                <div class="devamyazi btn">DEVAMINI OKU</div>
                            </div>
                            </p>

                            <ul class="list-inline">
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <i class="bi bi-clock">
                                            <span class="align-middle">
                                                2 Days Ago |
                                            </span>
                                        </i>
                                    </small>
                                </list>
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <span class="aling-middle">
                                            <i class="bi bi-chat-left-text">
                                                10
                                            </i>
                                        </span>
                                    </small>
                                </list>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-grid py-5">
                        <img src="image/2.jpg" class="card-img-top rounded-0">
                        <div class="card-body ps-3">
                            <h5 class="lead text-uppercase text-danger mb-4">
                                BLOG BAŞLIK
                            </h5>
                            <h6 class="card-title text-uppercase text-danger">
                                ARMANDO DIEGO
                            </h6>
                            <p class="card-text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. </p>
                            <ul class="list-inline">
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <i class="bi bi-clock">
                                            <span class="align-middle">
                                                2 Days Ago |
                                            </span>
                                        </i>
                                    </small>
                                </list>
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <span class="aling-middle">
                                            <i class="bi bi-chat-left-text">
                                                10
                                            </i>
                                        </span>
                                    </small>
                                </list>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-grid py-5">
                        <img src="image/3.jpg" class="card-img-top rounded-0">
                        <div class="card-body ps-3">
                            <h5 class="lead text-uppercase text-danger mb-4">
                                BLOG BAŞLIK
                            </h5>
                            <h6 class="card-title text-uppercase text-danger">
                                ARMANDO DIEGO
                            </h6>
                            <p class="card-text">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. </p>
                            <ul class="list-inline">
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <i class="bi bi-clock">
                                            <span class="align-middle">
                                                2 Days Ago |
                                            </span>
                                        </i>
                                    </small>
                                </list>
                                <list class="list-inline-item">
                                    <small class="text-muted">
                                        <span class="aling-middle">
                                            <i class="bi bi-chat-left-text">
                                                10
                                            </i>
                                        </span>
                                    </small>
                                </list>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    -->




    <!-- DIVIDER SECTION -->

    <section id="divider" class="generic dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <form id="emailform" action="emailpost.php" class="row" name="emailform" method="POST">
                        <div class="alert alert-success hide" id="basaridiv"></div>
                        <div class="alert alert-danger hide" id="hatadiv"></div>
                        <div class="input-group input-group-lg">
                            <input type="email" class="form-control rounded-0 border-danger text-white bg-transparent" name="emailtopla" id="emailtopla" placeholder="@JOIN NEWSLETTER">

                            <a class="btn btn-danger rounded-0 text-white border-danger" href="javascript:emailgonder();">GÖNDER</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- APPROACH SECTION -->

    <section id="approach" class="generic">
        <div class="container">
            <h2 class="display-5 text-danger mb-5">HOW WE APPROACH</h2>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="card bg-light border-0 mb-5">
                        <img src="image/design.jpg" class="card-img-top rounded-0">
                        <div class="card-body">
                            <h5 class="lead text-danger text-uppercase mb-4">Design Approach</h5>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            second item's accordion body. Let's imagine this being filled with some
                                            actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            third item's accordion body. Nothing more exciting happening here in terms
                                            of content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="card bg-light border-0">
                        <img src="image/development.jpg" class="card-img-top rounded-0">
                        <div class="card-body">
                            <h5 class="lead text-danger text-uppercase mb-4">Development Approach</h5>
                            <div class="accordion accordion-flush" id="accordionFlushExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            Accordion Item #4
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample2">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Accordion Item #5
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample2">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            second item's accordion body. Let's imagine this being filled with some
                                            actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            Accordion Item #6
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample2">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            third item's accordion body. Nothing more exciting happening here in terms
                                            of content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fancybox Section -->
    <section id="urunler" class="generic">
        <div class="container">
            <h2 class="display-5 text-danger mb-3">ÜRÜNLER</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <!--
                <a href="#portfolio" id="portfolio-link" onclick="galerie()"></a>
                <br>        -->

                <?php
                try {
                    $interogare = $connb->prepare("SELECT * from urunler");
                    $interogare->execute();
                    /*$test = $interogare->fetchAll();
                    print_r($test);*/
                    foreach ($interogare->fetchAll() as $linie) {
                        $urunadi = $linie["urunadi"];
                        $kucukresim = $linie["kucukresim"];
                        $buyukresim = $linie["buyukresim"];
                        echo '<a class="grouped_elements" href="adminpanel/dosyalar/' . $buyukresim . '" data-fancybox="gallery" title="' . $urunadi . '"><img src="adminpanel/dosyalar/' . $kucukresim . '" height="230" width="340" alt="" /></br></br></a> ';
                    }
                } catch (PDOException $e) {
                    die("Conectare imposibila: " . $e->getMessage());
                }
                ?>

            </div>
        </div>
    </section>


    <!--
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div id="container-card" class="col">
                <a class="grouped_elements " data-fancybox="galeri1" href="image/card1s.jpg"><img class="aw-zoom"
                        src="image/card1.jpg" alt="" /></a>
            </div>
            <div id="container-card" class="col">
                <a class="grouped_elements " data-fancybox="galeri1" href="image/card2s.jpg"><img class="aw-zoom"
                        src="image/card2.jpg" alt="" /></a>
            </div>
            <div id="container-card" class="col">
                <a class="grouped_elements" data-fancybox="galeri1" href="image/card3s.jpg"><img class="aw-zoom"
                        src="image/card3.jpg" alt="" /></a>
            </div>
            <div id="container-card" class="col">
                <a class="grouped_elements" data-fancybox="galeri1" href="image/card4s.jpg"><img class="aw-zoom"
                        src="image/card4.jpg" alt="" /></a>
            </div>
            <div id="container-card" class="col">
                <a class="grouped_elements" data-fancybox="galeri1" href="image/card5s.jpg"><img class="aw-zoom"
                        src="image/card5.jpg" alt="" /></a>
            </div>
            <div id="container-card" class="col">
                <a class="grouped_elements" data-fancybox="galeri1" href="image/card6s.jpg"><img class="aw-zoom"
                        src="image/card6.jpg" alt="" /></a>
            </div>
        </div>
    </div>
-->

    <!-- TEAM SECTION -->

    <section id="team" class="generic">
        <div class="container">
            <h2 class="display-5 text-danger mb-5">THE TEAM</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-0">
                    <div class="d-grid bg-danger py-5">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger rounded-0 py-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="lead">DESIGNER</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 p-0">
                    <div class="d-grid bg-warning py-5">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning rounded-0 py-5" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <span class="lead">DEVELOPER</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 p-0">
                    <div class="d-grid bg-success py-5">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success rounded-0 py-5" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            <span class="lead">ENGINEER</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 p-0">
                    <div class="d-grid bg-info py-5">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info rounded-0 py-5" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                            <span class="lead">ARTIST</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--MODAL-->

        <!-- Modal 1-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <img src="image/team1.jpg" class="img-fluid">
                        <h5 class="lead text-danger mt-2">JANE MAYAKOVSKI</h5>
                        <p>Provide an option to dismiss or close a component with .btn-close. Default styling is
                            limited, but highly customizable. </p>
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                        <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-warning rounded-0">LINKEDIN</button>
                            <button type="button" class="btn btn-success rounded-0">FACEBOOK</button>
                            <button type="button" class="btn btn-info rounded-0">TWITTER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <img src="image/team2.jpg" class="img-fluid">
                        <h5 class="lead text-danger mt-2">JOHN DOE</h5>
                        <p>Provide an option to dismiss or close a component with .btn-close. Default styling is
                            limited, but highly customizable. </p>
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                        <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-warning rounded-0">LINKEDIN</button>
                            <button type="button" class="btn btn-success rounded-0">FACEBOOK</button>
                            <button type="button" class="btn btn-info rounded-0">TWITTER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3-->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <img src="image/team3.jpg" class="img-fluid">
                        <h5 class="lead text-danger mt-2">CAN HEPOĞLU</h5>
                        <p>Provide an option to dismiss or close a component with .btn-close. Default styling is
                            limited, but highly customizable. </p>
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                        <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-warning rounded-0"><a href="https://www.linkedin.com/in/can-hepo%C4%9Flu-185672209/">LINKEDIN</a>
                            </button>
                            <button type="button" class="btn btn-success rounded-0"><a href="https://www.facebook.com/can.hepoglu.1">FACEBOOK</a></button>
                            <button type="button" class="btn btn-info rounded-0">TWITTER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 4-->
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <img src="image/team4.jpg" class="img-fluid">
                        <h5 class="lead text-danger mt-2">ALJKANKLF</h5>
                        <p>Provide an option to dismiss or close a component with .btn-close. Default styling is
                            limited, but highly customizable. </p>
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                        <div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-warning rounded-0">LINKEDIN</button>
                            <button type="button" class="btn btn-success rounded-0">FACEBOOK</button>
                            <button type="button" class="btn btn-info rounded-0">TWITTER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->

    <section id="contact" class="generic dark-bg">
        <div class="container">
            <h2 class="display-5 text-danger mb-5">GET IN TOUCH</h2>
            <div class="row">
                <div class="col-md-12 col-lg-6" id="uyelik_formu">
                    <form id="userForm" action="post.php" class="row" name="userForm" method="post">

                        <div class="alert alert-danger hide" id="hata">
                        </div>
                        <div class="alert alert-success hide" id="basari">
                        </div>


                        <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-text rounded-0 bg-danger border-danger text-white">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <input type="text" name="kadi" id="kadi" class="form-control rounded-0 border-danger text-white bg-transparent" placeholder="NAME *">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="input-group">
                                <div class="input-group-text rounded-0 bg-danger border-danger text-white">
                                    <i class="bi bi-at"></i>
                                </div>
                                <input type="text" name="email" id="email" class="form-control rounded-0 border-danger text-white bg-transparent" placeholder="EMAIL *">
                            </div>
                        </div>

                        <div class="col-12 py-5">
                            <div class="input-group">
                                <div class="input-group-text rounded-0 bg-danger border-danger text-white">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <textarea name="mesaj" id="mesaj" class="form-control rounded-0 border-danger text-white bg-transparent" placeholder="MESSAGE *" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="d-grid">

                            <a class="btn btn-outline-danger rounded-0 text-uppercase" href="javascript:gonderme();">Gönder</a>
                            <div class="alert alert-info fade out" id="bsalert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Başarı!</strong> This alert box could indicate a neutral informative or action
                            </div>

                        </div>
                    </form>

                </div>

                <div class="col-md-12 col-lg-6">
                    <table class="table border-0 d-flex h-85 flex-column justify-content-center">
                        <tbody>
                            <tr>
                                <td colspan="7" class="align-middle">
                                    <span class="text-light">Ulutek Teknoloji Geliştirme Bölg. Uludağ Ünv. Görükle
                                        Kampüsü Ar-Ge Atölye Binası, 16059 Nilüfer/Bursa</span>
                                </td>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.371299757957!2d28.857053315157664!3d40.223045979388125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca3e06bed41e17%3A0xc63b81995e798555!2sTurkticaret.net!5e0!3m2!1str!2str!4v1633436298267!5m2!1str!2str" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <th scope="row" class="text-danger lead text-center">

                                    <a id="konumbuton" href="https://goo.gl/maps/Cew6GF5Tw7gMXAim6"><i class="bi bi-geo-alt-fill" style="font-size: 2rem; color: rgba(189, 61, 75, .9);"></i></a>

                                </th>
                            </tr>
                            <tr>
                                <td colspan="7" class="align-middle">
                                    <span class="text-light">+90 507 - 888 - 97 - 56</span>
                                </td>
                                <th scope="row" class="text-danger lead text-center">
                                    <i class="bi bi-telephone-fill" style="font-size: 2rem;"></i>
                                </th>
                            </tr>

                            <tr>
                                <td class="align-middle"><span class="text-light"><a href="https://www.facebook.com/can.hepoglu.1/"><i class="bi bi-facebook"></i></a></span>
                                </td>
                                <td class="align-middle"><span class="text-light"><i class="bi bi-twitter"></i></span>
                                </td>
                                <td class="align-middle"><span class="text-light"><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></span>
                                </td>
                                <td class="align-middle"><span class="text-light"><i class="bi bi-linkedin"></i></span>
                                </td>
                                <td class="align-middle"><span class="text-light"><i class="bi bi-google"></i></span>
                                </td>
                                <td class="align-middle"><span class="text-light"><i class="bi bi-instagram"></i></span>
                                </td>
                                <td class="align-middle"><span class="text-light"><i class="bi bi-github"></i></span>
                                </td>
                                <th scope="row" class="text-danger lead text-center">
                                    <i class="bi bi-eye-fill" style="font-size: 2rem;"></i>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <footer>
        <div class="container-fluid bg-danger text-center py-4 lead-light">
            2021 Can Hepoğlu
        </div>
    </footer>









    <link href="fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="fancybox/jquery.fancybox.min.js"></script>

    <script>
        $(document).ready(function() {
            //$('.fancybox').fancybox();
        });
        /*$('[data-fancybox]').fancybox({
            loop: true
        });*/
    </script>

    <script type="text/javascript">
        (function() {

            var img = document.getElementById('container-card').firstChild;
            img.onload = function() {
                if (img.height > img.width) {
                    img.height = '100%';
                    img.width = 'auto';
                }
            };

        }());

        function gonderme() {

            $("#hata").hide();
            $('#basari').hide();

            var kadi = document.getElementById("kadi").value;
            var email = document.getElementById("email").value;
            var mesaj = document.getElementById("mesaj").value;

            if (kadi == null || kadi == "" || kadi.length < 3) {
                $("#hata").html("Adınız 3 karakterden az olamaz");
                $("#hata").show();
                return false;
            }
            if (mesaj == null || mesaj == "" || mesaj.length < 10) {
                $("#hata").html("Mesaj alanına en az 10 karakter giriniz");
                $("#hata").show();
                return false;
            }

            $.ajax({
                type: 'POST',
                url: "post.php",
                data: {
                    kadi: $('#kadi').val(),
                    email: $('#email').val(),
                    mesaj: $('#mesaj').val(),
                },
                success: function(result) {

                    if (result == '1') {
                        $("#basari").html("Mesajınız gönderildi. Teşekkürler");
                        $("#basari").show();

                        $('#kadi').val('');
                        $('#email').val('');
                        $('#mesaj').val('');
                    } else {
                        $("#hata").html("Bir hatadan dolayı gönderilemedi.");
                        $("#hata").show();
                    }
                }
            });

            //document.getElementById("userForm").submit();

        }



        function emailgonder() {

            var email = document.getElementById("emailtopla").value;


            let status = kontrolet();
            if (status == true) {
                $.ajax({
                    type: 'POST',
                    url: "emailpost.php",
                    data: {
                        email: email,
                    },
                    success: function(result) {

                        if (result == '1') {
                            $("#basaridiv").html("E-mail adresiniz başarıyla kaydedildi.");
                            $("#basaridiv").show();
                        } else {
                            $("#hatadiv").html("Bu e-mail adresi zaten kayıtlı.");
                            $("#hatadiv").show();
                        }
                    }
                });
            }

        }

        function kontrolet() {
            var mail = document.getElementById("emailtopla").value;
            var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
            if (regex.test(mail) == true) {
                return true;

            } else {
                $("#hatadiv").html("Girilen e-mail adresi geçerli değildir. Lütfen geçerli bir e-mail adresi giriniz.");
                $("#hatadiv").show();
                return false;
            }
        }




        jQuery(function($) {
            //ANA SAYFA DEVAMINI OKU
            $('.devamyazi').on('click', function() {

                if ($(this).hasClass('aktif')) {
                    $('.caticerik').css({
                        'height': '20px'
                    });
                    $(this).removeClass('aktif');
                } else {
                    $('.caticerik').css({
                        'height': 'auto'
                    });
                    $(this).addClass('aktif');
                }

            });
            //ANA SAYFA DEVAMINI OKU
        });


        $(document).ready(function() {
            $('.devamyazi').click(function() {
                var clickBtnValue = $(this).val();
                var ajaxurl = 'ajax.php',
                    data = {
                        'action': clickBtnValue
                    };
                $.post(ajaxurl, data, function(response) {
                    // Response div goes here.
                    alert("action performed successfully");
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script id="rendered-js">
        $(document).ready(function() {
            $('.carouselb').slick({
                slidesToShow: 3,
                dots: true,
                centerMode: true
            });

        });

        // Slick version 1.5.8
        //# sourceURL=pen.js
    </script>
</body>

</html>
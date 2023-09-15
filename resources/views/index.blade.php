<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Nosso principal objetivo é que as pessoas consigam controlar o descarte do lixo de uma forma correta." />
        <meta name="keywords" content="reciclagem, descarte, meio ambiente, online, coleta de lixo"/>
        <meta name="author" content="Flávio De Matos Henrique"/>
        <title>ReciclaOn | App de Coleta de Resíduos</title>
        <link rel="icon" href="{{ asset('img/landing/recicla.png') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/themify-icons.css') }}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{ asset('css/landing/app.css') }}">
    </head>
    <body>
        <!--::header part start::-->
        <header class="main_menu home_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/"> <img src="{{ asset('img/landing/recicla.png') }}" width="34"
                                    alt="logo"> ReciclaOn
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">Sobre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#services">Serviços</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#doctors">Itens de Coleta</a>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn_2 d-none d-lg-block" href="/login">Entrar</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-5">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h5>Seu Aplicativo de Coleta de Resíduos!</h5>
                                <h1>ReciclaOn</h1>
                                <p><b>ReciclaOn</b> é uma aplicação que ajuda a cadastrar resíduos de coleta de lixo e ganhar com isso.
                                Não se preocupe em entrar em contato com qualquer empresa para fazer a coleta dos resíduos, nós fazemos isso por você!</p>
                                <a href="/login" class="btn_2">Cadastrar resíduos de coleta</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner_img">
                            <img src="{{ asset('img/landing/pagina-inicial.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!-- about us part start-->
        <section class="about_us padding_top" id="about">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="about_us_img">
                            <img src="{{ asset('img/landing/home-background.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="about_us_text">
                            <h2>Sobre Nós</h2>
                            <p><b>Esse é um trabalho do Projeto Integrador - Univesp-2023</b></p>
                            <p>Nosso principal objetivo é ajudar as pessoas de um modo
                                muito fácil e simples a fazer o descarte correto e ganhar com isso.</p>
                            <div class="banner_item">
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_1.svg') }}" alt="">
                                    <h5>Segurança</h5>
                                </div>
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_2.svg') }}" alt="">
                                    <h5>Praticidade</h5>
                                </div>
                                <div class="single_item">
                                    <img src="{{ asset('img/landing/icon/banner_3.svg') }}" alt="">
                                    <h5>Moderno</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us part end-->

        <!-- feature_part start-->
        <section class="feature_part" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section_tittle text-center">
                            <h2>Nossos Serviços</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon">
                                    <i class="ti-credit-card"></i>
                                </span>
                                <h4>Contas</h4>
                                <p>Adicione suas coletas do mês
                                    e controle seus ganhos.</p>
                            </div>
                        </div>
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon">
                                    <i class="ti-check-box"></i>
                                </span>
                                <h4>Pagar</h4>
                                <p>Quanto pagar nas suas coletas,
                                    adicione no sistema para
                                    não se preocupar mais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="{{ asset('img/landing/back.avif') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon">
                                    <i class="ti-time"></i>
                                </span>
                                <h4>Histórico</h4>
                                <p>Tenha o histórico de
                                    coleta de forma
                                    muito simples.
                                </p>
                            </div>
                        </div>
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <span class="single_feature_icon">
                                    <i class="ti-eye"></i>
                                </span>
                                <h4>Previsão</h4>
                                <p>Veja a previsão de coleta
                                    do mês para melhorar seu
                                    controle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature_part start-->

        <!-- our depertment part start-->
        <section class="our_depertment section_padding" id="doctors">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-12">
                        <div class="depertment_content">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <h2>Itens de Coleta</h2>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/lampadas.svg') }}" alt="doctor">
                                            <h3>Lâmpadas</h3>

                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/baterias.svg') }}" alt="doctor">
                                            <h3>Baterias</h3>

                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/papeis-papelao.svg') }}" alt="doctor">
                                            <h3>Papeis e Papelão</h3>

                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/eletronicos.svg') }}" alt="doctor">
                                            <h3>Resíduos Eletrônicos</h3>

                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/organicos.svg') }}" alt="doctor">
                                            <h3>Resíduos Orgânicos</h3>

                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <img class="img-shape" src="{{ asset('img/pictures/oleo.svg') }}" alt="doctor">
                                            <h3>Óleo de Cozinha</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our depertment part end-->

        <!-- footer part start-->
        <footer class="footer-area">
            <div class="copyright_part">
                <div class="container">
                    <div class="row align-items-center">
                        <p class="footer-text m-0 col-lg-8 col-md-12">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                        </p>
                        <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer part end-->

        <!-- jquery plugins here-->
        <script src="{{ asset('js/landing/jquery-1.12.1.min.js') }}"></script>
        <!-- custom js -->
        <script src="{{ asset('js/landing/custom.js') }}"></script>
    </body>
</html>

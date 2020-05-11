<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/img/mtelpa-red-dot.png" type="image/x-icon">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Nunito:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/css/mtelpa.css">

    <title>mtelpa</title>
</head>
<!-- ------------------------------------------------------------------------------------------------------------------ -->


<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <header class="container-fluid bg-header" id="home">
        <div class="header-bg-gray">

            <!-- NAVIGATION -->

            <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top" id="my-navbar">
                <a href="#home" class="navbar-brand"><img src="/img/mtelpa-red-dot.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content"
                    aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-content">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#home" class="nav-link">Sākums</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">Par Mums</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#feedbacks" class="nav-link">Atsauksmes</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Kontakti</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- BANERA TEKSTA CONTAINER -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-text">
                            <h2>mtelpa</h2>
                            <p>photography &amp; <br> photo editing</p>
                            <div class="scroll-to-about text-center">
                                <a href="#about"><i class="fas fa-chevron-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ABOUT SECTION -->

    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-right">
                    <h2 class="title-text">Think Imagine Create <br>The power behind the picture</h2>
                </div>
                <div class="col-md-6 text-left">
                    <div class="about-text">
                        <p>Sustainable sriracha etsy letterpress hexagon gochujang fingerstache raw denim biodiesel
                            migas. Thundercats tumblr viral four loko flexitarian yr af migas mumblecore. Semiotics etsy
                            humblebrag VHS cray selfies kale chips.</p>
                        <p>&nbsp;</p>
                        <p>Typewriter yuccie marfa disrupt letterpress authentic locavore tumeric taiyaki irony. Yuccie
                            fingerstache PBR&B readymade, ugh sartorial shaman subway tile. Tacos bicycle rights
                            lumbersexual blog ramps, DIY glossier subway tile selvage snackwave man braid.</p>
                        <p>&nbsp;</p>
                        <ul class="about-list">
                            <li>Ethical vinyl trust fund four dollar toast iPhone pinterest.</li>
                            <li>Messenger bag meditation pinterest dreamcatcher sartorial aesthetic.</li>
                            <li>Tacos bicycle rights lumbersexual blog ramps.</li>
                            <li>Literally gluten-free butcher fanny pack photo booth kogi locavore XOXO normcore air
                                plant brooklyn readymade semiotics forage.</li>
                            <li>Schlitz DIY readymade direct trade health goth.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->

    <section class="section-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">
                        Daži no darbiem
                    </h2>
                </div>
            </div>
            <div class="container">
                <div id="my-grid" class="grid-padding">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="row">
                                <img src="img/galleryimg1-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(1)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg2-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(2)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg3-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(3)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg4-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(4)" alt="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <img src="img/galleryimg5-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(5)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg6-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(6)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg7-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(7)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg8-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(8)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg9-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(9)" alt="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <img src="img/galleryimg10-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(10)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg11-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(11)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg12-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(12)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg13-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(13)" alt="">
                            </div>
                            <div class="row">
                                <img src="img/galleryimg14-min.jpg" class="fit-image"
                                    onclick="openModal();currentSlide(14)" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="/gallery" target="_blank"><button type="button" class="btn btn-primary btn-lg my-5"
                            type="submit">Vairāk darbu <i class="fas fa-angle-right"></i></button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- FULL SCREEN IMG VIEW -->

    <div id="my-modal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <div class="my-slides">
                <img src="img/galleryimg1-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg2-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg3-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg4-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg5-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg6-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg7-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg8-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg9-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg10-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg11-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg12-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg13-min.jpg" class="big-image" alt="">
            </div>
            <div class="my-slides">
                <img src="img/galleryimg14-min.jpg" class="big-image" alt="">
            </div>
            <a class="prev" onclick="changeSlides(-1)">&#10094;</a>
            <a class="next" onclick="changeSlides(1)">&#10095;</a>
        </div>
    </div>

    <!-- FEEDBACK -->

    <section id="feedbacks">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center title text-dark"><strong>Atsauksmes</strong></h2>
                    <div class="carousel slide" id="my-carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#my-carousel" data-slide-to="0"></li>
                            <li data-target="#my-carousel" data-slide-to="1" class="active"></li>
                            <li data-target="#my-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item text-center">
                                <div class="img-box border rounded-circle m-auto">
                                    <img src="img/square-profileimg1-min.jpg" class="d-block w-100 rounded-circle"
                                        alt="">
                                </div>
                                <h5 class="py-1 my-1"><strong class="text-warning text-uppercase">Pēteris
                                        Lagzdiņš</strong></h5>
                                <h6 class="text-dark m-1">Sportists</h6>
                                <p class="pt-3 text-white">Quinoa gastropub synth bicycle rights photo booth heirloom
                                    man braid four dollar toast seitan. Farm-to-table prism subway tile pour-over
                                    helvetica tattooed actually gastropub church-key flannel williamsburg literally
                                    flexitarian before they sold out wayfarers.</p>
                            </div>
                            <div class="carousel-item text-center active">
                                <div class="img-box border rounded-circle m-auto">
                                    <img src="img/square-profileimg2-min.jpg" class="d-block w-100 rounded-circle"
                                        alt="">
                                </div>
                                <h5 class="py-1 my-1"><strong class="text-warning text-uppercase">Anda Kļaviņa</strong>
                                </h5>
                                <h6 class="text-dark m-1">Uzņēmīgs cilvēks</h6>
                                <p class="pt-3 text-white">Etsy DIY direct trade synth, keytar cornhole tbh
                                    single-origin coffee bespoke farm-to-table taxidermy af microdosing jean shorts
                                    small batch. Taxidermy unicorn fashion axe, post-ironic sartorial single-origin
                                    coffee vinyl PBR&B kogi put a bird on it tote bag whatever ugh slow-carb skateboard.
                                </p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box border rounded-circle m-auto">
                                    <img src="img/square-profileimg3-min.jpg" class="d-block w-100 rounded-circle"
                                        alt="">
                                </div>
                                <h5 class="py-1 my-1"><strong class="text-warning text-uppercase">Mārtiņš Sils</strong>
                                </h5>
                                <h6 class="text-dark m-1">Vienkārši gāju garām</h6>
                                <p class="pt-3 text-white">Quinoa gastropub synth bicycle rights photo booth heirloom
                                    man braid four dollar toast seitan. Farm-to-table prism subway tile pour-over
                                    helvetica tattooed actually gastropub church-key flannel williamsburg literally
                                    flexitarian before they sold out wayfarers. Try-hard swag
                                    migas offal. Occupy cloud bread iPhone hella.</p>
                            </div>
                        </div>
                        <a href="#my-carousel" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#my-carousel" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->


    <section class="section-padding" id="contact">
        <div class="container">
            <div class="contact-sec text-center">
                <h2>Vēlies sadarboties?</h2>
                <p>raksti mums</p>
            </div>
            <div class="container">
                <form class="contactForm" method="POST" role="form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Vārds" data-rule="minlen:4">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Epasts" data-rule="email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Subject" class="form-control" placeholder="Temats"
                            data-rule="minlen:4">
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="message" class="form-control" placeholder="Raksti savu rakstāmo"
                            data-rule="required" rows="4"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary btn-lg" type="submit">Sūtīt Ziņu</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->

    <footer class="text-center">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center">
                <div class="mr-sm-auto p-2">
                    Visas tiesības aizsargātas &copy; mtelpa 2020 
                    <div class="credits">
                        Izstrādāts sadarbībā ar <a href="https://rigacoding.lv/" target="_blank">RCS</a>
                    </div>
                </div>
                <div class="p-2">
                    <ul class="social-list">
                        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="row text-center d-block">
                <a href="#home" title="To Top"><i class="fas fa-chevron-up"></i></a>
            </div>
        </div>
    </footer>

    <script src="/js/mtelpa.js"></script>
</body>

</html>
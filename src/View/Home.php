<?php
// src/View/Home.php
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous" defer></script>
    <script src="/js/script.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">

    <title>Mon CV</title>
</head>
<body class="bg-black">

    <!-- NAVIGATION BURGER -->
    <div class="nav-section burger-cross">
        <a class="navbar-burger" role="button" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
        <div class="wrapper">
            <div class="wrapper-content mt-5 h-100 w-100">
                <div class="row text-uppercase">
                    <div class="nav-items-wrapper d-flex flex-column align-items-center justify-content-around pt-5">
                        <div class="nav-item mb-3">
                            <a class="nav-link active text-white" href="#presentation">présentation</a>
                        </div>
                        <div class="nav-item mb-3">
                            <a class="nav-link text-white" href="#competences">compétences</a>
                        </div>
                        <div class="nav-item mb-3">
                            <a class="nav-link text-white" href="#cv">cv</a>
                        </div>
                        <div class="nav-item mb-3">
                            <a class="nav-link text-white" href="#projets">projets</a>
                        </div>
                        <div class="nav-item mb-3">
                            <a class="nav-link text-white" href="#contact">contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR FIXE -->
    <section class="navbar-section d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg position-fixed">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 column-gap-5 text-uppercase bg-black rounded-4">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#presentation">présentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#competences">compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#cv">cv</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#projets">projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contact">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- HEADER -->
    <header id="presentation">
        <h1 class="h1 display-1 text-decoration text-center text-white">Bruno Hémon</h1>
        <div class="d-flex justify-content-center">
            <div class="photo text-center fs-5">photo</div>
        </div>
        <h2 class="text-uppercase display-3 text-center text-white">Développeur Web</h2>
    </header>

    <!-- MAIN -->
    <main>

        <!-- SEPARATEUR -->
        <section>
            <div class="container">
                <div class="separateur1 bg-danger"></div>
                <div class="separateur2 bg-white"></div>
            </div>
        </section>

        <!-- COMPETENCES -->
        <section class="comp mb-5" id="competences">
            <h2 class="section-title fs-3 text-uppercase text-center mb-5">compétences</h2>
            <div class="contenant-form d-flex justify-content-center">
                <div class="frame-section">
                    <!-- LANGAGES FRONT-END -->
                    <div class="div-logo">
                        <h5 class="title-h6 text-uppercase text-center mb-4">Mes langages de programmation</h5>
                        <div class="cont-lang-prog d-flex justify-content-evenly">
                            <div class="cont-lang-front">
                                <h6 class="text-uppercase text-center mb-2">front-end</h6>
                                <div class="cont d-flex justify-content-center">
                                    <div class="cont-img"><img src="/assets/images/html-3d.png" class="logo-lp img-fluid" alt="logo html"></div>
                                    <div class="cont-img"><img src="/assets/images/css-3d.png" class="logo-lp img-fluid" alt="logo css"></div>
                                    <div class="cont-img d-flex justify-content-center align-items-center">
                                        <img src="/assets/images/sass-3d.png" class="logo-lp img-fluid logo-sass" alt="logo sass">
                                    </div>
                                    <div class="cont-img d-flex justify-content-center align-items-center">
                                        <img src="/assets/images/js-3d.png" class="logo-lp img-fluid logo-js" alt="logo js">
                                    </div>
                                </div>
                            </div>
                            <div class="cont-lang-back">
                                <h6 class="text-uppercase text-center mb-2">back-end</h6>
                                <div class="cont d-flex justify-content-center">
                                    <div class="cont-img"><img src="/assets/images/php-3d.png" class="logo-lp img-fluid" alt="logo php"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FRAMEWORKS -->
                    <div class="div-logo">
                        <h5 class="title-h6 text-uppercase text-center mt-6 mb-4">Mes frameworks</h5>
                        <div class="cont-framew d-flex justify-content-evenly">
                            <div class="cont-framew-css">
                                <h6 class="text-uppercase text-center mb-2">css</h6>
                                <div class="cont d-flex justify-content-center">
                                    <div class="cont-img"><img src="/assets/images/bootstrap-3d.png" class="logo-lp img-fluid" alt="logo bootstrap"></div>
                                    <div class="cont-img"><img src="/assets/images/bulma-3d.png" class="logo-lp img-fluid" alt="logo bulma"></div>
                                </div>
                            </div>
                            <div class="cont-framew-css">
                                <h6 class="text-uppercase text-center mb-2">front-end</h6>
                                <div class="cont d-flex justify-content-center"><div class="cont-img"><img src="" class="logo-lp img-fluid" alt=""></div></div>
                            </div>
                            <div class="cont-framew-back">
                                <h6 class="text-uppercase text-center mb-2">back-end</h6>
                                <div class="cont d-flex justify-content-center">
                                    <div class="cont-img d-flex justify-content-center align-items-center">
                                        <img src="/assets/images/symfony-3d.png" class="logo-lp img-fluid logo-symfo" alt="logo symfony">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- IDE -->
                    <div class="div-logo">
                        <h6 class="title-h6 text-uppercase text-center mt-6 mb-4">Mes IDE</h6>
                        <div class="cont d-flex justify-content-center">
                            <div class="cont-img"><img src="/assets/images/vscode-3d.png" class="logo-lp img-fluid" alt="logo vs code"></div>
                            <div class="cont-img"><img src="/assets/images/phpstorm-3d.png" class="logo-lp img-fluid" alt="logo phpstorm"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SEPARATEUR -->
        <section>
            <div class="container">
                <div class="separateur1 flex-direction-column bg-danger"></div>
                <div class="separateur2 bg-white"></div>
            </div>
        </section>

        <!-- CV -->
        <section class="portfolio" id="cv">
            <h3 class="section-title text-uppercase text-center fs-3 mb-5">cv</h3>
            <div class="contenant-form d-flex justify-content-center">
                <div class="frame-section d-flex justify-content-start">
                    <div class="emplois bg-dark opacity-75"></div>
                    <div class="middle-block flex-column">
                        <div class="bg-cv bg-dark opacity-75">
                            <div class="contenant-identity d-flex justify-content-center">
                                <div class="frame-photo"></div>
                                <div class="identity">
                                    <p class="name text-white text-center fw-bold fs-6">Bruno Hémon</p>
                                    <p class="text-white text-center fs-6">
                                        Né le : 01.06.1984 <br>
                                        à Marseille 13012 <br><br>
                                        41 ans
                                    </p>
                                </div>
                            </div>
                            <div class="section-cv_contact">
                                <p class="tel text-white text-center fs-6">tel : <br>07.50.93.69.39</p>
                                <p class="email text-white text-center fs-6">e-mail : <br>bhh.develop@gmail.com</p>
                                <p class="adr text-white text-center fs-6">adresse : <br>44 allée de la Brigantine - 13127 Vitrolles</p>
                            </div>
                        </div>
                        <div class="diplomes bg-dark opacity-75"></div>
                    </div>
                    <div class="divers bg-dark opacity-75"></div>
                </div>
            </div>
        </section>

        <!-- SEPARATEUR -->
        <section>
            <div class="container">
                <div class="separateur1 flex-direction-column bg-danger"></div>
                <div class="separateur2 bg-white"></div>
            </div>
        </section>

        <!-- PROJETS -->
        <section class="projets" id="projets">
            <h3 class="section-title text-uppercase text-center fs-3 mb-5">projets</h3>
            <div class="contenant-form d-flex justify-content-center">
                <div class="frame-section"></div>
            </div>
        </section>

        <!-- SEPARATEUR -->
        <section>
            <div class="container">
                <div class="separateur1 flex-direction-column bg-danger"></div>
                <div class="separateur2 bg-white"></div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="contact mb-6" id="contact">
            <h3 class="section-title text-uppercase text-center fs-3 mb-5">contact</h3>
            <div class="frame-section mb-6 d-flex justify-content-center m-auto">
                <div class="contenant-form m-auto">
                    <h6 class="title-h6 text-center text-uppercase text-tertiary fw-bold mt-2 mb-6">formulaire de contact</h6>
                    <form>
                        <div class="text-space mb-3">
                            <label for="exampleInputEmail1" class="form-label d-block text-center">Email address from</label>
                            <input type="email" class="form-control rounded-4" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text text-danger mb-6">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="text-center mb-6">
                            <p class="to">to :</p>
                            <p>bhh.develop@gmail.com</p>
                        </div>
                        <div class="text-space text-center mb-3">
                            <label for="exampleInputPassword1" class="form-label">Object</label>
                            <input type="text" class="form-control rounded-4 mb-6" id="exampleInputPassword1" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="div-textarea text-center">
                                <label class="to" for="your-message">Your message</label>
                                <textarea class="textarea rounded-2 text-black bg-white" name="message" id="story" rows="6" cols="15" required></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- SEPARATEUR -->
        <section>
            <div class="container mt-6">
                <div class="separateur1 flex-direction-column bg-danger"></div>
                <div class="separateur2 bg-white"></div>
            </div>
        </section>

    </main>

    <footer class="mt-0">
    </footer>

</body>
</html>

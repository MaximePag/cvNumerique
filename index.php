<?php include 'formControl.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="assets/icon/fontawesome/css/all.css" rel="stylesheet">
    <title>CV - Maxime Pageot</title>
</head>

<body onload="typeWriter(),blinkingChar()">
    <div class="container">
        <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark">
            <a class="navbar-brand nav_title" href="#"><strong>CV Maxime Pageot</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#a1">Accueil<span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a class="nav-link" href="#a2">Expériences<span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a class="nav-link" href="#a3">Formations<span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a class="nav-link" href="#a4">Compétences<span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a class="nav-link" href="#a5">Projets Réalisés<span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a class="nav-link" href="#a6">À Propos<span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a class="nav-link" href="#a7">Contact<span
                                class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center py-5">
                    <h1>Curriculum Vitæ</h1>
                    <h1>Maxime Pageot</h1>
                    <h2>><span id="typewriter"></span><span id="blinkchar">|</span></h2>
                </div>
            </div>
        </div>
    </header>
    <a id="a1"></a>
    <div class="art">
        <h2 class="title">Présentation</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto mb-5">
                    <div class="card card_mobile">
                        <img class="card-img-top img-circle" src="assets/img/photo_mini.jpg" alt="Photo Maxime Pageot">
                        <div class="card-body">
                            <ul class="text-dark">
                                <li><strong>Nom :</strong> Pageot</li>
                                <li><strong>Prénom :</strong> Maxime</li>
                                <li><strong>Date de naissance :</strong> 18/12/1997</li>
                                <li><strong>Adresse :</strong> Roye, France</li>
                                <li><strong>Téléphone :</strong> 06.21.29.00.09</li>
                                <li><strong>Email :</strong> max_p@live.fr</li>
                                <li><strong>Télécharger le CV standard :</strong></li>
                                <li><a href="assets/img/CV22012020.jpg" download><input type="button"
                                            value="Télécharger"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 m-auto text-center">
                    <p>Bonjour, je m'appelle Maxime j'ai 22 ans et je suis actuellement apprenant au centre de formation
                        "La Manu".</p>
                    <p>Passionné depuis mon enfance des métiers de l'informatique et du web,</p>
                    <p>J'ai décidé de suivre cette voie pour devenir développeur web et j'ai entamé ma reconversion
                        professionnelle.</p>
                    <p>J'y apprends le métier de développeur web et web mobile pendant 6 mois.</p>
                    <p>En premier lieu j'ai commencé à créer mon CV avec les languages HTML5 et CSS3.
                    </p>
                    <p>Dans un second temps je l'ai amélioré avec le framework Bootstrap pour le rendre plus responsive.
                    </p>
                    <p>Puis j'y ajoute des scripts JS afin de dynamiser mon CV.</p>
                    <p>Par la suite je ferais le back-end du CV en utilisant du PHP.</p>
                </div>
            </div>
        </div>
    </div>
    <a id="a2"></a>
    <div class="art">
        <h2 class="title">Expériences</h2>
        <div class="container">
            <div class="row">
                <h3 class="subtitle">2019</h3>
            </div>
            <div class="row experience">
                <div class="col-md-4">
                    <img src="assets/img/deceuninck.jpg" alt="Logo de Deceuninck" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-briefcase fa-2x mr-4"></i>Conducteur de ligne chez
                        Deceuninck à Roye</p>
                    <p class="font-weight-bold"><i class="fas fa-calendar-alt fa-2x mr-4"></i>Juillet 2018 - Décembre
                        2019</p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description du poste</p>
                    <p>Gestion d'une ligne d'extrusion de profilé en PVC, approvisionnement, conditionnement,</p>
                    <p>réalisation de contrôles qualités sur ordinateur.</p>
                    <p>Travail en équipe, horaire en 5/8.</p>
                </div>
            </div>
            <div class="row">
                <h3 class="subtitle">2018</h3>
            </div>
            <div class="row experience">
                <div class="col-md-4">
                    <img src="assets/img/inter.png" alt="Logo de Intermarché" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-briefcase fa-2x mr-4"></i>Préparateur de commandes chez
                        Base ITM à Chaulnes</p>
                    <p class="font-weight-bold"><i class="fas fa-calendar-alt fa-2x mr-4"></i>Mai 2018 - Juillet 2018
                    </p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description du poste</p>
                    <p>Préparation de commandes sur chariot, CACES type R389.</p>
                    <p>Horaire en 2/8.</p>
                </div>
            </div>
            <div class="row">
                <h3 class="subtitle">2017</h3>
            </div>
            <div class="row experience">
                <div class="col-md-4">
                    <img src="assets/img/matines.png" alt="Logo de Matines" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-briefcase fa-2x mr-4"></i>Manutentionnaire chez Matines
                        à Montdidier</p>
                    <p class="font-weight-bold"><i class="fas fa-calendar-alt fa-2x mr-4"></i>Décembre 2017 - Mai 2018
                    </p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description du poste</p>
                    <p>Palettisation de colis, nettoyage des machines, gestion d'une machine de nettoyage</p>
                    <p>de palettes plastiques et d'alveoles de rangement.</p>
                    <p>Travail en équipe, horaire de journée ou en 3/8.</p>
                </div>
            </div>
            <div class="row experience">
                <div class="col-md-4">
                    <img src="assets/img/saison.jpg" alt="Photo de saisonniers" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-briefcase fa-2x mr-4"></i>Saisonnier chez SARL Thierry
                        Peugniez à Gruny</p>
                    <p class="font-weight-bold"><i class="fas fa-calendar-alt fa-2x mr-4"></i>Août 2017 - Octobre 2017
                    </p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description du poste</p>
                    <p>Tri de pommes de terre, contrôle visuel de qualité.</p>
                    <p>Travail en équipe, horaire en 2/8.</p>
                </div>
            </div>
            <div class="row experience">
                <div class="col-md-4">
                    <img src="assets/img/plombier.jpg" alt="Photo de plombier" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-briefcase fa-2x mr-4"></i>Plombier/Manutentionnaire
                        chez Qualichauff-Services à Péronne</p>
                    <p class="font-weight-bold"><i class="fas fa-calendar-alt fa-2x mr-4"></i>Janvier 2017 - Avril 2017
                    </p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description du poste</p>
                    <p>Fixation et raccordement de radiateurs, installation de pieuvres PER.</p>
                    <p>Travail en binôme, horaire de journée.</p>
                </div>
            </div>
        </div>
    </div>
    <a id="a3"></a>
    <div class="art">
        <h2 class="title">Formations</h2>
        <div class="container">
            <div class="row">
                <h3 class="subtitle">2020</h3>
            </div>
            <div class="row mt-5 experience p-4">
                <div class="col-md-4">
                    <img src="assets/img/lamanu.png" alt="Logo de LaManu" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-user-graduate fa-2x mr-4"></i>(En cours) TP Développeur
                        Web & Web Mobile<br />(Niveau 5)</p>
                    <p class="font-weight-bold"><i class="fas fa-map-marker-alt fa-2x mr-4"></i>Centre de Formation La
                        Manu à Noyon</p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description</p>
                    <p>Pendant 6 mois j'ai appris à développer un site web.</p>
                    <p>Appris à utiliser les languages : HTML5, CSS3, ... Et à utiliser les Frameworks : Bootstrap, ...
                    </p>
                    <p>Appris à appliquer la méthode agile, et à maqueter un site web.</p>
                </div>
            </div>
            <div class="row">
                <h3 class="subtitle">2018</h3>
            </div>
            <div class="row mt-5 experience p-4">
                <div class="col-md-4">
                    <img src="assets/img/promeo.jpg" alt="Logo de ProMeo" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-user-graduate fa-2x mr-4"></i>TP Conducteur
                        d'installation et de machines automatisées<br />(Niveau 3)</p>
                    <p class="font-weight-bold"><i class="fas fa-map-marker-alt fa-2x mr-4"></i>Centre de Formation
                        ProMeo à Amiens</p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description</p>
                    <p>Pendant 10 mois en alternance j'ai appris le métier de Conducteur de ligne.</p>
                    <p>J'ai, à la fin de ma période de formation obtenu le TP CIMA.</p>
                </div>
            </div>
            <div class="row">
                <h3 class="subtitle">2016</h3>
            </div>
            <div class="row mt-5 experience p-4">
                <div class="col-md-4">
                    <img src="assets/img/jracine.jpg" alt="Logo du lycée Jean Racine" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-user-graduate fa-2x mr-4"></i>BacPro Maintenance des
                        équipements industriels<br />(Niveau 4)</p>
                    <p class="font-weight-bold"><i class="fas fa-map-marker-alt fa-2x mr-4"></i>Lycée Jean Racine de
                        Montdidier</p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description</p>
                    <p>Pendant 1 an à la suite du BEP j'ai perfectionné mon apprentissage.</p>
                    <p>J'ai, en fin d'année scolaire obtenu les résultats attendus mais je n'ai pas pu valider mon
                        BacPro faute de stage.</p>
                </div>
            </div>
            <div class="row">
                <h3 class="subtitle">2015</h3>
            </div>
            <div class="row mt-5 experience p-4">
                <div class="col-md-4">
                    <img src="assets/img/jracine.jpg" alt="Logo du lycée Jean Racine" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-user-graduate fa-2x mr-4"></i>BEP Maintenance des
                        produits & des équipements industriels<br />(Niveau 3)</p>
                    <p class="font-weight-bold"><i class="fas fa-map-marker-alt fa-2x mr-4"></i>Lycée Jean Racine de
                        Montdidier</p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description</p>
                    <p>Pendant 1 an à la suite d'une réorientation au lycée, j'y ai appris le métier de Technicien de
                        maintenance industriel.</p>
                    <p>J'ai, en fin d'année scolaire obtenu le BEP MPEI.</p>
                </div>
            </div>
            <div class="row">
                <h3 class="subtitle">2012</h3>
            </div>
            <div class="row mt-5 experience p-4">
                <div class="col-md-4">
                    <img src="assets/img/lmichel.png" alt="Logo du collège Louise Michel" class="img" />
                </div>
                <div class="col-md-8">
                    <p class="font-weight-bold"><i class="fas fa-user-graduate fa-2x mr-4"></i>Diplôme National du
                        Brevet</p>
                    <p class="font-weight-bold"><i class="fas fa-map-marker-alt fa-2x mr-4"></i>Collège Louise Michel de
                        Roye</p>
                    <p class="font-weight-bold"><i class="fas fa-stream fa-2x mr-4"></i>Description</p>
                    <p>Pendant 4 ans j'ai suivi le parcours général du collège et j'ai obtenu le DNB.</p>
                </div>
            </div>
        </div>
    </div>
    <a id="a4"></a>
    <div class="art">
        <h2 class="title">Compétences</h2>
        <div class="container">
            <div class="row">
                <h2 class="subtitle my-5">Développement</h2>
            </div>
            <div class="row skill">
                <div class="col-md-4 text-center">
                    <img src="assets/img/html5.png" class="skill_icon" alt="icône html5" />
                    <div id="html5" class="circlebar"></div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="assets/img/css3.png" class="skill_icon" alt="icône css3" />
                    <div id="css3" class="circlebar"></div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="assets/img/js.png" class="skill_icon" alt="icône javascript" />
                    <div id="js" class="circlebar"></div>
                </div>
            </div>
            <div class="row">
                <h2 class="subtitle my-5">Frameworks</h2>
            </div>
            <div class="row skill">
                <div class="col-md-4 text-center">
                    <img src="assets/img/bootstrap.png" class="skill_icon" alt="icône bootstrap" />
                    <div id="bs" class="circlebar"></div>
                </div>
            </div>
            <div class="row">
                <h2 class="subtitle my-5">Système d'exploitations</h2>
            </div>
            <div class="row skill">
                <div class="col-md-4 text-center">
                    <p><i class="fab fa-windows fa-7x"></i></p>
                    <p class="font-weight-bold">Windows</p>
                    <p class="font-weight-bold">10 / 8.1 / 7 / Vista / XP</p>
                    <div id="windows" class="bar"></div>
                </div>
                <div class="col-md-4 text-center">
                    <p><i class="fab fa-ubuntu fa-7x"></i></p>
                    <p class="font-weight-bold">GNU/Linux</p>
                    <p class="font-weight-bold">Ubuntu 20.04LTS</p>
                    <div id="ubuntu" class="bar"></div>
                </div>
                <div class="col-md-4 text-center">
                    <p><i class="fab fa-apple fa-7x"></i></p>
                    <p class="font-weight-bold">MAC OS</p>
                    <p class="font-weight-bold">X</p>
                    <div id="mac" class="bar"></div>
                </div>
            </div>
            <div class="row">
                <h2 class="subtitle my-5">Langues</h2>
            </div>
            <div class="row skill">
                <div class="col-md-3 text-center">
                    <p class="font-weight-bold" title="Langue maternelle">Français - Natif</p>
                    <div id="french" class="flagbar"></div>
                </div>
                <div class="col-md-3 text-center">
                    <p class="font-weight-bold" title="Selon le classement du CECRL">Anglais - B2</p>
                    <div id="english" class="flagbar"></div>
                </div>
                <div class="col-md-3 text-center">
                    <p class="font-weight-bold" title="Selon le classement du CECRL">Portugais - A1</p>
                    <div id="portuguese" class="flagbar"></div>
                </div>
                <div class="col-md-3 text-center">
                    <p class="font-weight-bold" title="Selon le classement du CECRL">Espagnol - A1</p>
                    <div id="spanish" class="flagbar"></div>
                </div>
            </div>
        </div>
    </div>
    <a id="a5"></a>
    <div class="art">
        <h2 class="title">Projets Réalisés</h2>
        <div id="project_carousel" class="carousel slide mx-5 shadow" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#project_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#project_carousel" data-slide-to="1"></li>
                <li data-target="#project_carousel" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/memento.png" alt="Projet Memento">
                    <div class="carousel-caption project_overlay">
                        <h3>Projet Memento</h3>
                        <p>Projet réalisé pour moi même, permettant de me faire un pense bête.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/cv.png" alt="Projet CV Numérique">
                    <div class="carousel-caption project_overlay">
                        <h3>Projet CV Numérique</h3>
                        <p>Projet réalisé afin de montrer mes modestes compétences.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/fialkosport.png" alt="Projet Site Fialkosport">
                    <div class="carousel-caption project_overlay">
                        <h3>Projet Site Fialkosport</h3>
                        <p>Projet en cours de réalisation pour mon TitrePro DWWM</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#project_carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#project_carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <a id="a6"></a>
    <div class="art">
        <h2 class="title">À Propos</h2>
    </div>
    <a id="a7"></a>
    <div class="art">
        <h2 class="title">Contact</h2>
        <section class="mb-4 mx-5">
            <h2 class="h2-responsive font-weight-bold text-center my-4">Vous souhaitez me contacter?</h2>
            <h3 class="h3-responsive text-center mx-auto mb-5">M'envoyer un message</h3>
            <div class="row">
                <div class="col-md-12">
                    <form id="contact-form" class="needs-validation mb-4 mx-5" name="contact-form" action="index.php#a7" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input onkeyup="formNameValidation()" type="text" id="name" name="name" value="<?= $_POST['name'] ?>" placeholder="Ex : Jean MARTIN" class="form-control">
                                    <label for="name" class="<?= $formIsValid['name'] ? : 'INVALID' ?>"><?= $formErrors['name'] ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input onkeyup="formEmailValidation()" type="text" id="email" name="email" value="<?= $_POST['email'] ?>" placeholder="Ex : exemple@exemple.com" class="form-control">
                                    <label for="email" class="<?= $formIsValid['email'] ? : 'INVALID' ?>"><?= $formErrors['email'] ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" value="<?= $_POST['subject'] ?>" class="form-control">
                                    <label for="subject" class="<?= $formIsValid['subject'] ? : 'INVALID' ?>"><?= $formErrors['subject'] ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea id="message" name="message" value="<?= $_POST['message'] ?>" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message" class="<?= $formIsValid['message'] ? : 'INVALID' ?>"><?= $formErrors['message'] ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left">
                            <button onclick="formValidation()" type="submit" class="btn btn-primary send_button" name="formSubmit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="container">
            <h3 class="subtitle text-center mb-5">Mes coordonnées</h3>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="fas fa-envelope fa-4x"></i>
                    <p>max_p@live.fr</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-map-marked-alt fa-4x"></i>
                    <p>Roye, Picardie, France</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-phone fa-4x"></i>
                    <p>06 21 29 00 09</p>
                </div>
            </div>

            <h3 class="subtitle text-center mb-5">Mes réseaux</h3>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="https://www.linkedin.com/in/maxime-pageot-7a27271a6/"><img src="assets/img/linkedin.png"
                            alt="Logo de Linkedin" class="network_icon" /></a></li>
                    <a href="https://github.com/MaximePag/"><img src="assets/img/github.png" alt="Logo de Github"
                            class="network_icon" /></a>
                </div>
            </div>
        </div>
        <script src="assets/js/progressbar.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
        <script src="assets/js/script.js" charset="utf-8"></script>
</body>

</html>
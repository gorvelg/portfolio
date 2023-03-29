<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guillaume Gorvel - Portfolio</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php
        require 'templates/header.php';
    ?>
    <!-- Wrapper -->
    <div class="wrapper">
      <a name="home-anchor"></a>
      <!-- Début section accueil -->
      <section class="home-container">
        <div class="home-name">
          <h1>Hello World</h1>
          <h1>Je suis <b>Guillaume GORVEL</b></h1>
          <h2>Développeur Front-End</h2>
        </div>
        <div class="home-photo">
          <img src="images/avatar-blob.png" alt="photo de guillaume gorvel" />
        </div>

        <div class="btn-center">
          <a href="#about-anchor"><button>En savoir plus</button></a>
        </div>
      </section>
      <!-- Fin section accueil -->
      <!-- Début section à propos -->
      <a name="about-anchor"></a>
      <section class="about-container">
        <div class="about-content">
          <p>
            Bonjour et bienvenue sur mon site portfolio ! Je m'appelle Guillaume
            Gorvel et je suis étudiant en première année de BUT MMI(Métier du
            Multimédia et Internet) à l'IUT de Troyes et développeur Web junior.
          </p>
          <p>
            À travers mes expériences en tant que chargé de clientèle chez EDF
            et en effectuant mon service civique à Pole Emploi, j'ai acquis de
            très bonnes compétences en écoute, relation client, résolution de
            problèmes et travail en équipe.
          </p>
          <p>
            Passionné par les métiers de la communication, du web et du
            multimédia, j'ai décidé de reprendre mes études afin de développer
            des compétences en design graphique, développement web, production
            audiovisuelle et marketing.
          </p>
          <p>
            À travers ce site, je souhaite vous présenter mes projets et
            réalisations, ainsi que partager ma passion pour le monde du
            digital. N'hésitez pas à parcourir mon site et à me contacter si
            vous avez des questions ou des propositions de collaboration.
          </p>
        </div>
        <div class="about-photo">
          <img
            src="images/photocorpo.jpg"
            alt="Photo de Guillaume Gorvel avec un MacBook Air"
          />
        </div>
      </section>
      <!-- Fin section à propos -->
      <!-- Début section troisieme ligne compétences et réalisations -->
      <div class="third-row">
        <a name="skill-anchor"></a>
        <!-- début section compétences -->
        <section class="skills-container">
          <h2>Mes compétences</h2>
          <p>
            Bien que je sois encore en cours d'apprentissage, mes compétences
            sont en constantes améliorations, car je suis toujours à l'affût des
            dernières tendances technologiques.
          </p>
          <div class="skill-item">
            <!-- Card -->
            <div class="skill-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"
                />
              </svg>
              <p>HTML5</p>
            </div>
            <!-- Card -->
            <div class="skill-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"
                />
              </svg>
              <p>CSS3</p>
            </div>
            <!-- Card -->
            <div class="skill-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"
                />
              </svg>
              <p>Javascript</p>
            </div>
            <!-- Card -->
            <div class="skill-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"
                />
              </svg>
              <p>PHP</p>
            </div>
            <!-- Card -->
            <div class="skill-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8.9 0 1.8.1 2.8.2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7.3 13.7.3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"
                />
              </svg>
              <p>Wordpress</p>
            </div>
            <!-- Card -->
            <div class="skill-card">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z"
                />
              </svg>
              <p>SQL</p>
            </div>
          </div>
          <div class="btn-center">
            <a href="images/cv_2023.pdf"><button>Voir mon CV</button></a>
          </div>
        </section>
        <!-- fin section compétences -->
        <!-- début section réalisation -->
        <a name="achievements-anchor"></a>
        <section class="achievements-container">
          <h2>Mes réalisations</h2>
          <div class="achievement-item">
            <a href="http://mmi22f01.mmi-troyes.fr/racontines/">
              <!-- card -->
              <div class="achievement-card">
                <img
                  src="images/web-bdc.jpg"
                  alt="capture d'écran site la boite de christine"
                />
                <div class="card-content">
                  <h3>La boîte de Christine</h3>
                  <p class="card-subtitle">Site Vitrine</p>
                </div>
              </div>
            </a>
            <a href="http://mmi22f01.sae105.ovh">
              <!-- card -->
              <div class="achievement-card">
                <img
                  src="images/web-rs.jpg"
                  alt="capture d'écran site the rolling stones"
                />
                <div class="card-content">
                  <h3>The Rolling Stones</h3>
                  <p class="card-subtitle">
                    Page de Données généré en PHP avec un fichier JSON, page
                    dynamique(Upload d'images) et page de contact fonctionnelle.
                  </p>
                </div>
              </div>
            </a>
            <a href="https://mmi22f01.sae203.ovh">
              <!-- card -->
              <div class="achievement-card">
                <img
                  src="images/web-mminuterie.jpg"
                  alt="capture d'écran site la mminuterie"
                />
                <div class="card-content">
                  <h3>La MMINUTERIE</h3>
                  <p class="card-subtitle">
                    Site dynamique en PHP et MySQL. Réalisation du CRUD et du
                    Back-office Admin.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </section>
      </div>
      <!-- Fin section troisième ligne -->
      <a name="network-anchor"></a>
      <section class="network-container">
        <h2>Me contacter</h2>
        <div class="network-item">
          <a href="https://github.com/gorvelg"
            ><i class="fa-brands fa-github"></i
          ></a>
          <a href="https://fr.linkedin.com/in/guillaume-gorvel-0510ab267"
            ><i class="fa-brands fa-linkedin"></i
          ></a>
          <a href="https://twitter.com/Nekk_o"
            ><i class="fa-brands fa-twitter"></i
          ></a>
          <a href="https://www.instagram.com/nekk_o/"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a href="mailto:ggorvel@gmail.com"
            ><i class="fa-solid fa-envelope"></i>
          </a>
        </div>
      </section>
    </div>
    <!-- Fin wrapper -->
    <?php
        require 'templates/footer.php';
    ?>
  </body>
  <script src="javascript/script.js"></script>
</html>

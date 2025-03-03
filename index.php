<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mon Portfolio</title>
  <!-- Lien vers la feuille de style -->
  <link rel="stylesheet" href="styles.css" />
  <!-- Optionnel : Google Fonts par ex. Montserrat -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap">
</head>

<body>

  

  <!-- Navigation fixe -->
  <nav class="navbar">
    <div class="nav-logo">
      <a href="#hero">Portfolio</a>
    </div>
    <ul class="nav-links">
      <li><a href="#about">À Propos</a></li>
      <li><a href="#projects">Projets</a></li>
      <li><a href="#skills">Expériences</a></li>
      <li><a href="#certifs">Certifications</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- Section Hero avec effet parallax -->
  <header id="hero" class="hero-section">
    <img class="hero-pict" src="img/pict.jpg" />
    <div class="hero-text">
      <h1>Bienvenue sur mon Portfolio</h1>
      <p>Développeur passionné, je crée des solutions web et logicielles</p>
      <a href="#projects" class="btn-hero">Découvrez mon parcours</a>
    </div>
  </header>

  <!-- Section À-Propos -->
  <section id="about" class="about-section fade-in">
    <h2>À Propos</h2>
    <p>
      Je m'appelle Michael LOISON, je suis développeur et testeur logiciel QA.
      Passionné par la création d'applications, de jeu, de réalité virtuelle,
      et l'amélioration continue de la performance des systèmes.
    </p>
    <p>
      Mon parcours m’a amené à travailler sur des applications
      Windows (C#.Net, WPF), sur des solutions VR/AR/MR,
      ainsi que de la maintenance et du support technique.
    </p>
  </section>

  <!-- Section Projets -->
  <section id="projects" class="projects-section fade-in">
    <h2>Expériences professionnelles</h2>
    <div class="cards-container">
      <!-- Carte n°1 -->
      <div class="card">
        <div class="card-image">
          <img src="img/scann.png">
        </div>
        <div class="card-content">
          <h3>Application C#</h3>
          <p>
            Développement d’applications pour la gestion de stocks/inventaires avec
            scans de codes-barres, interface WPF ergonomique.
          </p>
        </div>
      </div>

      <!-- Carte n°2 -->
      <div class="card">
        <div class="card-image">
          <img src="img/VR2.png">
        </div>
        <div class="card-content">
          <h3>Démo VR/MR</h3>
          <p>
            Création d’une démo immersive en réalité virtuelle,
            démontrant l'utilisation d'un casque Oculus Go
            et d'applications Unity 3D (C#).
          </p>
        </div>
      </div>

      <!-- Carte n°3 -->
      <div class="card">
        <div class="card-image">
          <img src="img/VR.png">
        </div>
        <div class="card-content">
          <h3>Support Technique & SAV</h3>
          <p>
            Responsable SAV pour une société de réalité virtuelle,
            assistance après-achat, gestion du support et veille
            technologique sur le marché VR Mobile.
          </p>
        </div>
      </div>

      <!-- Carte n°4 -->
      <div class="card">
        <div class="card-image">
          <img src="img/VR.png">
        </div>
        <div class="card-content">
          <h3>Développeur freelance C# .NET</h3>
          <p>
            Plusieurs mission pour les société : principalement pour des application VR pourcasque Oculus Go
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section mes Certifications -->
  <section id="certifs">
    <h2>Mes Certifications</h2>
    <div>
      <ul>
        <li>POEC Testeur logiciel EPSI (mars 2025)</li>
        <li>Certification Foundational C# withMicrosoft (Octobre 2024)</li>
        <li>Certification CEFR anglais niveau upper intermediate B2 (novembre 2020)</li>
        <li>POEC Developpeur web fullstackchez Aston (aout 2018)</li>
        <li>Agent de maintenance informatiqueILEP (septembre 2009)</li>
      </ul>
    </div>
  </section>

  <!-- Section Compétences -->
  <section id="skills" class="skills-section fade-in">
    <h2>Compétences</h2>
    <div class="skill-bar">
      <p>C# / .NET</p>
      <div class="progress-bar">
        <div class="progress-fill" style="width: 80%;">80%</div>
      </div>
    </div>
    <div class="skill-bar">
      <p>JavaScript</p>
      <div class="progress-bar">
        <div class="progress-fill" style="width: 70%;">70%</div>
      </div>
    </div>
    <div class="skill-bar">
      <p>Python</p>
      <div class="progress-bar">
        <div class="progress-fill" style="width: 70%;">70%</div>
      </div>
    </div>
    <div class="skill-bar">
      <p>Unity 3D</p>
      <div class="progress-bar">
        <div class="progress-fill" style="width: 60%;">60%</div>
      </div>
    </div>
    <div class="skill-bar">
      <p>HTML/CSS</p>
      <div class="progress-bar">
        <div class="progress-fill" style="width: 90%;">90%</div>
      </div>
    </div>
  </section>

  <!-- Section Contact -->
  <section id="contact" class="contact-section fade-in">
    <h2>Contact</h2>
    <form class="contact-form" action="mailto:cfirote@gmail.com" method="mail">
      <label for="name">Nom</label>
      <input type="text" id="name" name="name" required />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required />

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit" name="envoie">Envoyer</button>
    </form>
  </section>



  <!-- Footer -->
  <footer class="footer-section">
    <p>&copy; 2025 - Mon Portfolio</p>
  </footer>

  <!-- Script JS -->
  <script src="script.js"></script>
</body>

</html>
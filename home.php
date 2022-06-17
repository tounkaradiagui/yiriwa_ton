<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/img/logo.png" rel="icon">
  <!-- ton CSS Files -->
  <link href="assets/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/home.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <title>Yiriwa-Ton</title>
  
</head>

<body>

  <div class="modal fade" id="contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #0E4C92; color: #f79423">
          <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="liaison.php">
        <div class="modal-body">
          <legend>Veuiller remplir les champs</legend>
          <div class="row">
            <div class="col">
              <label>Nom</label>
            </div>
            <div class="col">
              <input type="text" name="nom" required="">
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label>Prénom</label>
            </div>
            <div class="col">
              <input type="text" name="prenom" required>
            </div>
          </div><br>
          <div class="row">
            <div class="col">
              <label>Téléphone</label>
            </div>
            <div class="col">
              <input type="text" name="telephone" required>
            </div>
          </div><br>
          <label>Objet</label><br>
          <input type="texte" name="objet" required><br>
          <label>Message</label><br>
          <textarea name="message" required></textarea><br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn" data-dismiss="modal" style="background-color: #0E4C92; color: #fff">Annuler</button>
            <button type="submit" name="envoyer" class="btn" style="background-color: #F79423; color: #fff">Envoyer</button>
        </div>
      </form> 
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto me-lg-10"><img src="assets/images/logo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="home.php" class="active">Accueil</a></li>
          <li><a href="apropos.php">A propos</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#contact"> Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/images/slide/1.jpeg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h4>Bienvenue sur Yiriwa-Ton</h4>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="#" class="btn-get-started">Lire le règlement</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/images/slide/2.jpeg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h4>Bienvenue sur Yiriwa-Ton</h4>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Lire le règlement</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/images/slide/3.jpeg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h4>Bienvenue sur Yiriwa-ton</h4>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Lire le règlement</a></div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Yiriwa-Ton</span></strong>. Tous les droits sont réservés
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      </div>
    </div>
  </footer>

  <!-- ton JS Files -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
include('pages/connexion.php');
// Declaration des variables contenant les donnees remplies
if (!$_SESSION['validate']) {
 header("Location:enregistrement.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Enregistrement - rencontre site</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/dropzone/dropzone.css">
  <link rel="stylesheet" href="assets/vendor/dropzone/min/dropzone.min.css">
  <!-- Template Main CSS File -->
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><span>Ren</span>contre</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Accueil</a></li>
          <li><a href="#">Condition</a></li>
          <li><a href="#">Procedure</a></li>
          <li><a href="#">A propos</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li class="active"><a href="enregistrement.php">S'incrire</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Enregistrement</h2>
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li>enregistrement</li>
          </ol>
        </div>
       
      </div>
     </section>
<section class="content" id="finaliser">
  <div class="container">
      <div class="row mt-3 justify-content-center " data-aos="fade-up">
          <div class="section-title">
            <h3><strong> Finaliser votre Inscription</strong></h3>
            <div class="row">
              <div class="col-lg-6  col-md-6 col-sm-12">
              <span class="h4">Identifiant: </span>
              </div>
              <div class="col-lg-6  col-md-6 col-sm-12">
              <p class="text-center text-danger" id="id_user"><?= $_SESSION['nom']?> votre identifiant est : <?= $_SESSION['id']?></p> 
              </div>
              <div class="col-12">
              <p class="text-success h5">Votre inscription a bien reussi veillez copier votre identifiant pour votre requete!</p>
              </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
               <div class="card-body php-email-form bg-teal">
                  <form action="" method="POST" enctype="multipart/form-data" id="image_insert">
                   <div class="form-row col-12">
                       <input type="text" name="id_users" class="form-control" id="id_users" value=<?=$_SESSION['id']?> hidden>
                         <div class="validate" id="nom_area"></div>
                   </div>
                    <div class="form-row">
                    <div class="form-group rounded text-center py-5 dropzone w-100" id="test_dropzone">
                          <div class="dz-message">
                              <i class="fas fa-download fa-2x text-muted" aria-hidden="true"></i>
                              <h4 class="text-muted">Clicker ici pour inserser une image.</h4>
                              <div id="file_area"></div>
                            </div>
                    </div>
                    </div>
                    <div class="form-row text-center">
                    <input type="submit" value="Valider" name="valider" id="valider" class="form-control btn btn-primary">
                    </div>
                  </form>
               </div>
            </div>
        </div>
      </div>
  </div>
</section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Rencontre</h3>
            <p>
              Avenue Charles de Gaulle, face a la pediatrie <br>
              Ouagadougou, Rue <br>
              Burkina Faso <br><br>
              <strong>Telephone:</strong> (+225) 68 22 55 24<br>
              <strong>Email:</strong><a href="mailto:contact@example.com"> contact@example.com</a><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens Utils</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Enregistrement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Condition d'utilisation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Equipe</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Consultation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Description</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Analise</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Conseil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Entretiens</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Nous joindre</h4>
            <p>Vous pouvez nous joindre</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>rencontre</span></strong>. Tout droit reserve
        </div>
        <div class="credits">
         
          Designed by <a href="https://wsimeonsite.netlify.app/">Yamba Digital Hub</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- <script src="assets/vendor/dropzone/min/dropzone.min.js"></script> -->
  <script src="assets/vendor/dropzone/dropzone.js"></script>
  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>

<script >
//********************************************** Insertion***************************/

Dropzone.autoDiscover = false;
    $(document).ready(function () {

        var dropzone = new Dropzone("#test_dropzone", {
                url: 'pages/upload.php',
                clickable: true,
                method: 'POST',
                autoProcessQueue: false,
                paraName: 'file',
                maxFilesize: 7, //MB
                maxFiles: 3,
                acceptedFiles:'.png',
                addRemoveLinks: true,
                uploadMultiple: false,
                thumbnailWidth: 400,
                thumbnailHeight: 400,
                init: function () {
                    dzClosure = this;
                    $('#valider').on("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var erreur = [];
                        //----------------------------------------------------------------------------------------

                        if (dzClosure.getQueuedFiles().length < 1) {
                            $(".dropzone").addClass("border border-danger");
                            erreur['file'] = 'Ce champs doit pas etre vide';
                            $("#file_area").html("<div class='text-danger my-2'>"+ erreur['file']+"</div>");
                        }
                        else
                        {
                            $(".dropzone").removeClass("border border-danger");  
                            $("#file_area").html("");                          
                        }

                        if (Object.keys(erreur).length == 0) {
                            dzClosure.processQueue();
                        }
                    });

                    dzClosure.on("sending", function (data, xhr, formData) {
                        $(":input[name]", $("#image_insert")).each(function () {
                            formData.append(this.name, $(':input[name=' + this.name + ']', $("#image_insert")).val());
                        });
                    })

                    dzClosure.on("complete" , function (file) {
                        dzClosure.removeFile(file);
                    })
                },

                success: function (file, response) {

                    if (response == 'success') {
                        toastr.error("Echec d'inscription");
                        $("#test").html(response);
                    }
                    else
                    {
                        toastr.success("Votre insciption a reussi!");
                        $("#image_insert")[0].reset();
                        $("#id_users").val('');
                       

                        
                    }
                                        
                },
                error: function (file, response) {
                    toastr.error("Erreur");
                }
        });
    });

 
</script>

</body>

</html>
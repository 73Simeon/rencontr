<?php
include('../pages/connexion.php');
// Declaration des variables contenant les donnees remplies
// Check user login or not

// if ( !$_SESSION['realtion']) {
//      header("Location: index.php");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile - rencontre site</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/vendor/dropzone/dropzone.css">
  <link rel="stylesheet" href="../assets/vendor/dropzone/min/dropzone.min.css">
  <!-- Template Main CSS File -->
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link href="../css/styles.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><span>Ren</span>contre</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="../index.php">Accueil</a></li>
          <li><a href="#">Condition</a></li>
          <li><a href="#">Procedure</a></li>
          <li><a href="#">A propos</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li class="active"><a href="../enregistrement.php">S'incrire</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
   

  <!-- <main id="main"> -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profiles</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Profiles</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg profiles" >
      <div class="container">
      <div class="section-title">
      <span><i class="text-center">Faites vos reherchers en fonction des champs</i> </span>
        </div>
        <form action="" method="GET">
        <div class="card-body mb-2" >
        <div class="row mb-2">
     
          <div class="col-lg-2 col-md-4 col-sm-4 ">
       
          <label for="ville">Age</label>
          <select name="age" id="age" class="form-control">
            <option value=""></option>
          <?php 
                  
                    $nom_age = "SELECT * FROM user";
                    $query = $conn->prepare($nom_age);
                    $query->execute();
                    ?>
                    <?php 
                    while($line = $query->fetch()):
                    ?>
                    <option value="<?php echo $line['AGE'];?>" ><?php echo $line["AGE"];?></option>
                    <?php 
                   endwhile;
                    ?>
          </select>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4">
          <label for="ville">Ville</label>
          <select name="vill" id="vill" class="form-control">
          <option value=""></option>
          <?php 
                  
                    $nom_ville = "SELECT * FROM  user";
                    $query = $conn->prepare($nom_ville);
                    $query->execute();
                    ?>
                    <?php 
                    while($line = $query->fetch()):
                    ?>
                    <option value="<?php echo $line["NOM_VILLE"];?>" ><?php echo $line["NOM_VILLE"];?></option>
                    <?php 
                   endwhile;
                    ?>
          </select>
          </div>
          
          <div class="col-lg-2 col-md-4 col-sm-4">
          <label for="profession">Profession</label>
          <select name="prof" id="prof" class="form-control">
          <option value=""></option>
          <?php 
                  
                  $nom_prof = "SELECT * FROM user";
                  $query = $conn->prepare($nom_prof);
                  $query->execute();
                  ?>
                  <?php 
                  while($line = $query->fetch()):
                  ?>
                  <option value="<?php echo $line['PROFESSION'];?>"><?php echo $line['PROFESSION'];?></option>
                  <?php 
                 endwhile;
                  ?>
          </select>
          </div>
 
          <div class="col-lg-2 col-md-4 col-sm-4">
          <label for="situation">Matrimoniale</label>
          <select name="matri" id="matri" class="form-control">
          <option value=""></option>
          <?php   
                  $nom_prof = "SELECT * FROM user";
                  $query = $conn->prepare($nom_prof);
                  $query->execute();
                  ?>
                  <?php 
                  while($line = $query->fetch()):
                  ?>
                  <option value="<?php echo $line['SITUATION_MATRI'];?>" ><?php echo $line['SITUATION_MATRI'];?></option>
                  <?php 
                 endwhile;
                  ?>
          </select>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4">
          <label for="situation">Religion</label>
          <select name="rlgion" id="rlgion" class="form-control">
          <option value=""></option>
          <?php   
                  $nom_prof = "SELECT * FROM user";
                  $query = $conn->prepare($nom_prof);
                  $query->execute();
                  ?>
                  <?php 
                  while($line = $query->fetch()):
                  ?>
                  <option value="<?php echo $line['RELIGION'];?>" ><?php echo $line['RELIGION'];?></option>
                  <?php 
                 endwhile;
                  ?>
          </select>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4">
          <label for="situation">Niveau d'Etude</label>
          <select name="etude" id="etude" class="form-control">
          <option value=""></option>
          <?php   
                  $nom_prof = "SELECT * FROM user";
                  $query = $conn->prepare($nom_prof);
                  $query->execute();
                  ?>
                  <?php 
                  while($line = $query->fetch()):
                  ?>
                  <option value="<?php echo $line['NIVEAU_ETUDE'];?>" ><?php echo $line['NIVEAU_ETUDE'];?></option>
                  <?php 
                 endwhile;
                  ?>
          </select>
          </div>
          </div>
          <div class="text-center mt-2">
          <button type="submit" name="cherch" id="cherch" class="btn btn-success"><i class="fas fa-check text-white"></i></button>
          </div>
        </div>
      </form>
      </div>
      <div class="row">
      <?php 
      //GENRE !='".$_SESSION['usex']."'
///***********************Rechecehe sdinameme */
if (isset($_GET['cherch'])) {

                $conditions = [];
                $parameters = [];

              if (!empty($_GET['etude']))
              {
                  // here we are using equality
                  $conditions[] = 'NIVEAU_ETUDE = ?';
                  $parameters[] = $_GET['etude'];
              }

              if (!empty($_GET['rlgion']))
              {
                  // here we are using equality
                  $conditions[] = 'RELIGION = ?';
                  $parameters[] = $_GET['rlgion'];
              }

              if (!empty($_GET['ag']))
              {
                  // here we are using equality
                  $conditions[] = 'AGE = ?';
                  $parameters[] = $_GET['ag'];
              }

              if (!empty($_GET['matri']))
              {
                  // here we are using equality
                  $conditions[] = 'SITUATION_MATRI = ?';
                  $parameters[] = $_GET['matri'];
              }

              if (!empty($_GET['prof']))
              {
                  // here we are using equality
                  $conditions[] = 'PROFESSION = ?';
                  $parameters[] = $_GET['prof'];
              }

              if (!empty($_GET['vill']))
              {
                  // here we are using equality
                  $conditions[] = 'NOM_VILLE = ?';
                  $parameters[] = $_GET['vill'];
              }
              $conditions[]= 'STATUT =?';
              $parameters[]= 'Non en Relation';


              // $conditions[]= 'GENRE !=?';
              // $parameters[]= $_SESSION['usex'];
              // the main query
              $sql = "SELECT * FROM user";

              // a smart code to add all conditions, if any
              if ($conditions)
              {
                  $sql .=" WHERE ".implode(" AND ", $conditions);
              }

              // the usual prepare/execute/fetch routine
              $stmt = $conn->prepare($sql);
              $stmt->execute($parameters);
      
              while ($dat = $stmt->fetch()):
         
         ?> 
         
          <div class="col-lg-4 mb-3" data-aos="fade-up">
            <div class="testimonial-item">
        
        <div class="card  d-flex flex-fill">
          <div class="card-header text-muted ">
           Indentifiant: <span class="text-danger"> <?= $dat['id_users']?> </span>
          </div>
          <div class="card-body pt-0">
            <div class="row">
            <div class="col-lg-5 col-md-7  col-sm-12 text-center portfolio-item filter-web mt-2 gallery">
              <?php echo "<img src='../pages/Image/".$dat['PHOTOS']."' class='img-fluid' alt='".$dat['PHOTOS']."' id='image_zome'>";?>
              <div class="portfolio-info row">
                <!-- <div class="col-6">
                <button type="submit" onclick="zoomin()" class="form-control mt-1"><i class="bx bx-plus"></i></button>
                </div>
            
              <button type="submit" onclick="zoomin()" class="form-control mt-1"><i class="bx bx-minus"></i></button> -->

              </div>
            </div>
              <div class="col-lg-7 col-md-7 col-sm-12">
                <h2 class="lead"><b><?= $dat['NOM_PRENOM']?></b></h2>
                <p class="small"><b>Age: </b> <?= $dat['AGE']?>  </p> 
                <p class="small"><b>Genre: </b> <?= $dat['GENRE']?>  </p> 
                <p class="small"><b>Fontion: </b> <?= $dat['PROFESSION']?>  </p>
                <p class="small"><b>Ville: </b> <?= $dat['NOM_VILLE']?></p> 
                <p class="small"><b>Domaine d'Etude: </b> <?= $dat['NOM_DOMAINE']?>  </p>
                <p class="small"><b>Niveau d'Etude: </b> <?= $dat['NIVEAU_ETUDE']?>  </p>
                <p class="small"><b>Situation Matrimatimoniale: </b> <?= $dat['SITUATION_MATRI']?>  </p>
                <p class="small"><b>Profile Rechercher: </b> <?= $dat['PROFILE_RECHER']?>  </p>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 text-center text-info">
              <span>Interesser</span>
              </div>
              <div class="col-6">
              <input type="checkbox" id="interesser" name="interesser" class="form-control">
              </div>
            </div>
        
          
          </div>
        </div>
            </div>
          </div>
          
          <?php endwhile?>
          <?php } ?>
      </div>
         
          
       

    </section><!-- End Testimonials Section -->

  <!-- </main>End #main -->

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
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/venobox/venobox.min.js"></script>
<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<!-- <script src="assets/vendor/dropzone/min/dropzone.min.js"></script> -->
<script src="../assets/vendor/dropzone/dropzone.js"></script>
<!-- Template Main JS File -->
<script src="../js/main.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<script>
   function zoomin() {
            var GFG = document.getElementById("image_zome");
            var currWidth = GFG.clientWidth;
            GFG.style.width = (currWidth + 100) + "px";
        }
          
        function zoomout() {
            var GFG = document.getElementById("image_zome");
            var currWidth = GFG.clientWidth;
            GFG.style.width = (currWidth - 100) + "px";
        }

$(document).ready(function(){
  $(document).on("click","#corres", function(){
    if($("#correspondand").val()==='' || $("#correspondand").val() === null){
      $("#correspondand").addClass("border border-danger");
      toastr.error("Veuiller selectionner votre correspondance");
    }
    else{
      $("#correspondand").removeClass("border border-danger");
      toastr.success("valide");
      $("#genre").attr("hidden",true);
      $(".profiles").attr("hidden",false);
    }
  });
});
</script>
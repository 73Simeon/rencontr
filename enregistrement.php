<?php
include('pages/connexion.php');
// Declaration des variables contenant les donnees remplies
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
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

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
     <!-- End Breadcrumbs -->
    <section id="Image" class="content">
      <div class="container">
        <div class="row mt-3 justify-content-center " data-aos="fade-up">
        <div class="section-title">
          <h3><strong> Formulaire d'inscription</strong></h3>
          <div class="row" id="user" hidden >
            <div class="col-lg-6  col-md-6 col-sm-12">
            <span class="h4">Identifiant: </span>
            </div>
            <div class="col-lg-6  col-md-6 col-sm-12">
            <p class="form-control text-center text-danger" id="id_user"></p> 
            </div>
            <div class="col-12">
          <p class="text-success h5">Votre inscription a bien reussi veillez copier votre identifiant pour votre requete!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
               <div class="card-body php-email-form bg-teal">
                  <form action="" method="POST" enctype="multipart/form-data" id="debuter">
                  <div class="form-row">
                <div class="col-md-4 form-group">
                <label for="nom" class="control-label col-lg-12">Nom & Prenom <span class="text-danger">*</span> </label>
                  <input type="text" name="nom" class="form-control" id="nom"/>
                  <div class="validate" id="nom_area"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="profession" class="control-label col-lg-12">Profession <span class="text-danger">*</span></label>
                  <input type="text" name="profession" class="form-control" id="profession" />
                  <div class="validate" id="profession_area"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="age" class="control-label col-lg-12" >Age <span class="text-danger">*</span></label>
                  <input type="number" name="age" class="form-control" id="age" />
                  <div class="validate" id="age_area"></div>
                </div>
              </div>
              <div class="form-row ">
                <div class="col-md-4 form-group">
                <label for="sex" class="control-label col-lg-12">Genre <span class="text-danger">*</span></label>
                  <select name="sex" id="sex" class="form-control">
                    <option value=""></option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                  </select>
                  <div class="validate" id="sex_area"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="domaine" class="control-label col-lg-12">Domaine d'Etude <span class="text-danger">*</span></label>
                <input name="domaine" id="domaine" class="form-control">              
                   <div class="validate" id="domaine_area"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="niveau" class="control-label col-lg-12" >Niveau d'Etude <span class="text-danger">*</span></label>
                <select name="niveau" id="niveau" class="form-control">
                    <option value=""></option>
                    <optgroup label="Primaire">Primaire</optgroup>
                    <option value="CP1">CP1</option>
                    <option value="CP2">CP2</option>
                    <option value="CE1">CE1</option>
                    <option value="CE2">CE2</option>
                    <option value="CM1">CM1</option>
                    <option value="CM2">CM2</option>
                    <optgroup label="Secondaire">Secondaire</optgroup>
                    <option value="6eme">6eme</option>
                    <option value="5eme">5eme</option>
                    <option value="4eme">4eme</option>
                    <option value="33eme">3eme</option>
                    <option value="2nd">2nd</option>
                    <option value="1ere">1ere</option>
                    <option value="Tle">Tle</option>
                    <optgroup label="Universitaire">Universitaire</optgroup>
                    <option value="Bac + 1">Bac + 1</option>
                    <option value="Bac + 2">Bac + 2</option>
                    <option value="Licence">Licence</option>
                    <option value="Master 1">Master 1</option>
                    <option value="Masteur 2">Masteur 2</option>
                    <option value="Doctorat">Doctorat</option>
                </select>                 
                   <div class="validate" id="niveau_area"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 form-group">
                <label for="ville" class="control-label col-lg-12">Ville <span class="text-danger">*</span></label>
                <select name="ville" id="ville" class="form-control">
                    <option value=""></option>
                    <option value="Ouagadougou">Ouagadougou</option>
                    <option value="Bobo">Bobo</option>
                    <option value="Koudougou">Koudougou</option>
                    <option value="Fada">Fada</option>
                    <option value="Kaya">Kaya</option>
                    <option value="Ouahigouha">Ouahigouha</option>
                    <!-- <?php 
                    
                    // $nom_ville = "SELECT * FROM villes";
                    // $query = $conn->prepare($nom_ville);
                    // $query->execute();
                    ?>
                    <?php 
                    // while($line = $query->fetch()):
                    ?>
                    <option value="<?php //echo $line[0];?>" ><?php //echo $line[1];?></option>
                    <?php 
                 //  endwhile;
                    ?> -->
                  </select>                    
                  <div class="validate" id="ville_area"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="matrimonial" class="control-label col-lg-12" >Situation matrimoniale <span class="text-danger">*</span></label>
                <select name="matrimoniale" id="matrimoniale" class="form-control">
                  <option value=""></option>
                  <option value="Polygamie">Polygamie</option>
                  <option value="Celibataire sans enfant">Celebataire sans enfant</option>
                  <option value="Voeuf avec enfant">Voeuf avec enfant</option>
                  <option value="Voeuf sans enfant">Voeuf sans enfant</option>
                  <option value="Divorce">Divorce</option>
                  <option value="Celebataire avec enfant">Celibataire avec enfant</option>
                  </select>                    
                  <div class="validate" id="matrimoniale_area"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="religion" class="control-label col-lg-12">Religion <span class="text-danger">*</span></label>
                <select name="religion" id="religion" class="form-control">
                    <option value=""></option>
                    <option value="Chretiens Catholique">Chretiens Catholique</option>
                    <option value="Chretiens Protestant">Chretiens Protestant</option>
                    <option value="Musulman">Musulman</option>
                    <option value="Animiste">Animiste</option>
                    <option value="Non Precise">Non Precise</option>
                  </select>                          
                 <div class="validate" id="religion_area"></div>
                </div>
              </div>
              <div class="form-row">
              <div class="col-md-4 form-group">
                <label for="telephone" class="control-label col-lg-12">Numero de Telephone ou WhatsApp <span class="text-danger">*</span></label>
                <input type="tel" name="telephone" id="telephone" class="form-control">
                <div class="validate" id="telephone_area"></div>
              </div>  
              <div class="col-md-4 form-group">
                <label for="email" class="control-label col-lg-12">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                <div class="validate" id="email_area"></div>
              </div> 
              <div class="col-md-4 form-group">
                <label for="option" class="control-label col-lg-12" >Option <span class="text-danger">*</span></label>
                <select name="option" id="option" class="form-control"> 
                  <option value=""></option>
                  <option value="Payant">Payant</option>
                  <option value="Gratuit">Gratuit</option>
                </select>
                <div class="validate" id="option_area"></div>
              </div> 
              </div>
              
              <div class="form-row">
              <div class="col-md-6 form-group">
                <label for="profile" class="control-label col-md-6">Profile Rechercher <span class="text-danger">*</span></label>
                <textarea class="form-control" name="profile" id="profile" rows="6" data-rule="minlen:50" data-msg="Ecrivez quelques chose!"></textarea>
                 <div class="validate" id="profile_area"></div>
              </div>
              <div class="col-md-6 form-group">
              <label for="profile" class="control-label col-md-12">Veuillez selectionner une seule image<span class="text-danger">*</span></label>
              <div class="form-group rounded text-center py-3 dropzone w-100" id="test_dropzone">
                          <div class="dz-message">
                              <i class="fas fa-download fa-2x text-muted" aria-hidden="true"></i>
                              <h4 class="text-muted">Clicker ici pour inserser une image.</h4>
                              <div id="file_area"></div>
                            </div>
                    </div>
              </div>
            </div>
                  <div class="row" id="confimation">
                    <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea cupiditate iusto numquam sunt aperiam, saepe libero facere. Dolores, similique omnis sit, eveniet nihil laboriosam perferendis ducimus, harum ipsam esse quaerat.</p>
                    </div>
                   <div class="col-md-6">
                     <label for="valider"> Valider</label>
                   <input type="checkbox" name="confimer" id="confirmer" class="form-group contol-form w-50">
                   <p  id="message" hidden><i class="text-danger">Veuiller remplir les champs pour passer a la validation </i></p>
                   </div>
                  </div>

                  <div class="form-row text-center" id="button" hidden>
                    
                    <div class="col-md-6 form-group">
                    <input type="submit" value="Envoyer" id="inserer"  name="inserer" class="btn btn-success w-50 control-form">

                    </div>
                        <div class="col-md-6 from-group">
                        <input type="submit" value="Annuler" id="annuler"  name="annuler" class="btn btn-danger w-50 control-form">
                        </div>

                      </div>
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
////********************************************Revenir a la normale apres voir eu des erreur */

////********************************************Revenir a la normale apres voir eu des erreur */
$('#nom').keyup(function(){
  $("#nom").removeClass('border border-danger');
  $("#nom_area").html("");
});
$('#age').keyup(function(){
  $("#age").removeClass('border border-danger');
  $("#age_area").html("");
});
$('#profession').keyup(function(){
  $("#profession").removeClass('border border-danger');
  $("#profession_area").html("");
});
$('#matrimoniale').change(function(){
  $("#matrimoniale").removeClass('border border-danger');
  $("#matrimoniale_area").html("");
});
$('#niveau').change(function(){
  $("#niveau").removeClass('border border-danger');
  $("#niveau_area").html("");
});
$('#ville').change(function(){
  $("#ville").removeClass('border border-danger');
  $("#ville_area").html("");
});
$('#domaine').change(function(){
  $("#domaine").removeClass('border border-danger');
  $("#domaine_area").html("");
});
$('#religion').change(function(){
  $("#religion").removeClass('border border-danger');
  $("#religion_area").html("");
});
$('#sex').change(function(){
  $("#sex").removeClass('border border-danger');
  $("#sex_area").html("");
});
$('#telephone').keyup(function(){
  $("#telephone").removeClass('border border-danger');
  $("#telephone_area").html("");
});
$('#profile').keyup(function(){
  $("#profile").removeClass('border border-danger');
  $("#profile_area").html("");
});
$('#option').change(function(){
  $("#option").removeClass('border border-danger');
  $("#option_area").html("");
});
$(".dropzone").change(function(){
$(".dropzone").removeClass("border border-danger");  
$("#file_area").html("");                          
});
//*********************Annuler///////***************/
$("#annuler").click(function(){
  $("#nom").val('');
  $("#age").val(''); 
  $("#ville").val(''); 
  $("#email").val(''); 
              $("#profession").val(''); 
              $("#telephone").val('');
              $("#domaine").val('');
              $("#religion").val(''); 
              $("#niveau").val('');
              $("#option").val('');
              $("#profile").val('');
              $("#matrimoniale").val('');
              $("#sex").val('');
});

//*****************************************button pour la vidation********************************** */
$('#confirmer').click(function(){
if($("#nom").val()=='' || $("#age").val()==''|| $("#ville").val()=='' || 
              $("#profession").val()==''|| $("#telephone").val()=='' || 
              $("#domaine").val()==''|| $("#religion").val()==''|| 
              $("#niveau").val()=='' || $("#option").val()=='' ||
              $("#profile").val()=='' || $("#matrimoniale").val()=='')
              {

            $("#message").attr("hidden", false)
      }
      else{
      $("#button").attr("hidden", false)
      $("#message").attr("hidden", true)
      }
});

 ///***********************************Insertin */
 
//  $(document).ready(function(){
//   $(document).on('click',"#inserer",function(e){
//     e.preventDefault();
//     var nom = $("#nom").val();
//     var age = $("#age").val()   
//     var profession = $("#profession").val()
//     var option = $("#option").val()
//     var niveau = $("#niveau").val();
//     var domaine = $("#domaine").val();
//     var ville = $("#ville").val();
//     var religion = $("#religion").val();
//     var matrimonial = $("#matrimoniale").val();
//     var telephone = $("#telephone").val();
//     var profile = $("#profile").val();
//     var sex = $("#sex").val();
//     var erreur =[];
//    if (nom ==='' ) {
//     $("#nom").addClass('border border-danger');
//     erreur['class'] = 'Votre nom et prenom';
//     $("#nom_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (age ==='' ) {
//     $("#age").addClass('border border-danger');
//     erreur['class'] = 'Veillez remplir votre age';
//     $("#age_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (profession ==='' ) {
//     $("#profession").addClass('border border-danger');
//     erreur['class'] = 'Veillez remplir votre profession';
//     $("#profession_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (option ==='' ) {
//     $("#option").addClass('border border-danger');
//     erreur['class'] = 'Veillez choisir l\'option ';
//     $("#option_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (niveau ==='' ) {
//     $("#niveau").addClass('border border-danger');
//     erreur['class'] = 'Veillez chosir votre niveau d\'etude';
//     $("#niveau_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (domaine ==='' ) {
//     $("#domaine").addClass('border border-danger');
//     erreur['class'] = 'Veillez remplir le domaine ';
//     $("#domaine_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (religion ==='' ) {
//     $("#religion").addClass('border border-danger');
//     erreur['class'] = 'Veillez choisir la religion';
//     $("#religion_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (sex ==='' ) {
//     $("#sex").addClass('border border-danger');
//     erreur['class'] = 'Veillez choisir le genre ';
//     $("#sex_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (matrimonial ==='' ) {
//     $("#matrimoniale").addClass('border border-danger');
//     erreur['class'] = 'Veillez choisir votre sitution matrimoniale';
//     $("#matrimoniale_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (profile ==='' ) {
//     $("#profile").addClass('border border-danger');
//     erreur['class'] = 'Veillez decrire le profile desirer ';
//     $("#profile_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (telephone ==='' ) {
//     $("#telephone").addClass('border border-danger');
//     erreur['class'] = 'Veillez remplir votre telephone';
//     $("#telephone_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//    if (ville ==='' ) {
//     $("#ville").addClass('border border-danger');
//     erreur['class'] = 'Veillez choisir la ville ';
//     $("#ville_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
//    }
//         else{
//           $.ajax({  
//                      url:"pages/ajax/save_user.php",  
//                      method:"POST",  
//                      data:$('#debuter').serialize(),   
//                      success:function(data){ 
//                         toastr.success('Insersion reussi');
//                          $("#resultat").html(data);
//                          $("#resultat").attr("hidden",false);
//                          $("#debuter")[0].reset();
//                          window.location.href = "finenregist.php";
//                      }  
//                 });  
//         }
       


//   })
//  });


 Dropzone.autoDiscover = false;
    $(document).ready(function () {

        var dropzone = new Dropzone("#test_dropzone", {
                url: 'pages/ajax/save_user.php',
                clickable: true,
                method: 'POST',
                autoProcessQueue: false,
                paraName: 'file',
                maxFilesize: 7, //MB
                maxFiles: 1,
                acceptedFiles:'.png',
                addRemoveLinks: true,
                uploadMultiple: false,
                thumbnailWidth: 400,
                thumbnailHeight: 400,
                init: function () {
                    dzClosure = this;
                    $('#inserer').on("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                          var erreur =[];
                          var nom = $("#nom").val();
                          var age = $("#age").val();   
                          var profession = $("#profession").val();
                          var option = $("#option").val();
                          var niveau = $("#niveau").val();
                          var domaine = $("#domaine").val();
                          var ville = $("#ville").val();
                          var religion = $("#religion").val();
                          var matrimonial = $("#matrimoniale").val();
                          var telephone = $("#telephone").val();
                          var profile = $("#profile").val();
                          var sex = $("#sex").val();
                          var erreur =[];
                        if (nom ==='' ) {
                          $("#nom").addClass('border border-danger');
                          erreur['class'] = 'Votre nom et prenom';
                          $("#nom_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (age ==='' ) {
                          $("#age").addClass('border border-danger');
                          erreur['class'] = 'Veillez remplir votre age';
                          $("#age_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (profession ==='' ) {
                          $("#profession").addClass('border border-danger');
                          erreur['class'] = 'Veillez remplir votre profession';
                          $("#profession_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (option ==='' ) {
                          $("#option").addClass('border border-danger');
                          erreur['class'] = 'Veillez choisir l\'option ';
                          $("#option_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (niveau ==='' ) {
                          $("#niveau").addClass('border border-danger');
                          erreur['class'] = 'Veillez chosir votre niveau d\'etude';
                          $("#niveau_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (domaine ==='' ) {
                          $("#domaine").addClass('border border-danger');
                          erreur['class'] = 'Veillez remplir le domaine ';
                          $("#domaine_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (religion ==='' ) {
                          $("#religion").addClass('border border-danger');
                          erreur['class'] = 'Veillez choisir la religion';
                          $("#religion_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (sex ==='' ) {
                          $("#sex").addClass('border border-danger');
                          erreur['class'] = 'Veillez choisir le genre ';
                          $("#sex_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (matrimonial ==='' ) {
                          $("#matrimoniale").addClass('border border-danger');
                          erreur['class'] = 'Veillez choisir votre sitution matrimoniale';
                          $("#matrimoniale_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (profile ==='' ) {
                          $("#profile").addClass('border border-danger');
                          erreur['class'] = 'Veillez decrire le profile desirer ';
                          $("#profile_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (telephone ==='' ) {
                          $("#telephone").addClass('border border-danger');
                          erreur['class'] = 'Veillez remplir votre telephone';
                          $("#telephone_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        if (ville ==='' ) {
                          $("#ville").addClass('border border-danger');
                          erreur['class'] = 'Veillez choisir la ville ';
                          $("#ville_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        

                        if (dzClosure.getQueuedFiles().length < 1) {
                            $(".dropzone").addClass("border border-danger");
                            erreur['file'] = 'Ce champs doit pas etre vide';
                            $("#file_area").html("<div class='text-danger my-2'>"+ erreur['file']+"</div>");
                        }

                        if (Object.keys(erreur).length == 0) {
                            dzClosure.processQueue();
                        }
                    });

                    dzClosure.on("sending", function (data, xhr, formData) {
                        $(":input[name]", $("#debuter")).each(function () {
                            formData.append(this.name, $(':input[name=' + this.name + ']', $("#debuter")).val());
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
                        $("#debuter")[0].reset();
                        window.location.href = "finenregist.php";
                        $_SESSION['validate']=true;
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
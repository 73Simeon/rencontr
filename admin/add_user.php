<?php
include_once('admin_dash_header.php');
require_once '../pages/connexion.php';
?>
 <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin_dash.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="Rencontre Admin" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrateur</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="admin_dash.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de Board
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Gestion
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_user.php" class="nav-link active">
                  <i class="far fas fa-plus nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="all_users.php" class="nav-link ">
                  <i class="far fas fa-table nav-icon"></i>
                  <p>Listes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ville.php" class="nav-link ">
                  <i class="far fas fa-home nav-icon"></i>
                  <p>Ville</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pofiles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="profiles.php" class="nav-link">
                  <i class="far fas fa-plus nav-icon"></i>
                  <p>Tous Profiles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Relations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Non Relation</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
    <!-- Content Header (Page header) -->
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ajouter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Ajouter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <!-- general form elements -->
                <div class="card card-primary ">
                  <div class="card-header ">
                    <div class="row">
                      <div class="col-md-6">
                    <h3 class="card-title ">Ajouer un membre</h3>
                    </div>
                
                   <span  class="form-control w-50 ml-20 text-center text-danger" id="id_user" hidden></span> 
                  </div>
                </div>
                  <form action="" method="POST" enctype="multipart/form-data" id="add_user">
                    <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label for="fullname">Nom & Prenoms</label>
                          <input type="text" class="form-control" id="nom" name="nom"  >
                        <div id="nom_erea"></div>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" id="age" name="age">
                        <div id="age_erea"></div>
                      </div>
                      <div class="form-group col-md-4">
                      
                        <label for="genre">Genre</label>
                        <select name="sex" id="sex" class="form-control">
                          <option value=""></option>
                          <option value="Homme">Homme</option>
                          <option value="Femme">Femme</option>
                          <option value="Non Precisee">Non Precise</option>
                        </select>
                        <div id="sex_erea"></div>
                      </div>
                      
                    </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                        <label for="ville">Ville</label>
                        <select name="ville" id="ville" class="form-control">
                        <option value=""></option>
                        <option value="Ouagadougou">Ouagadougou</option>
                        <option value="Bobo">Bobo</option>
                        <option value="Koudougou">Koudougou</option>
                        <option value="Fada">Fada</option>
                        <option value="Kaya">Kaya</option>
                        <option value="Ouahigouha">Ouahigouha</option>
                            </select>
                        <div id="ville_erea"></div>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="niveau">Niveau d'etude</label>
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
                      </div>
                      <div class="form-group col-md-4">
                        <label for="domaine">Domaine d'etude</label>
                        <input name="domaine" id="domaine" class="form-control">
                        <div id="domaine_erea"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label for="profession">Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession">
                        <div id="profession_erea"></div>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="situation">Situation Matrimoniale</label>
                        <select name="situation" id="situation" class="form-control">
                         <option value=""></option>
                        <option value="Polygamie">Polygamie</option>
                        <option value="Celibataire sans enfant">Celebataire sans enfant</option>
                        <option value="Voeuf avec enfant">Voeuf avec enfant</option>
                        <option value="Voeuf sans enfant">Voeuf sans enfant</option>
                        <option value="Divorce">Divorce</option>
                        <option value="Celebataire avec enfant">Celibataire avec enfant</option>
                        </select>
                        <div id="situation_erea"></div>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="religion">Religion</label>
                        <select class="form-control" id="religion" name="religion" >
                        <option value=""></option>
                        <option value="Chretiens Catholique">Chretiens Catholique</option>
                        <option value="Chretiens Protestant">Chretiens Protestant</option>
                        <option value="Musulman">Musulman</option>
                        <option value="Animiste">Animiste</option>
                        <option value="Non Precise">Non Precise</option>
                        </select>
                        <div id="religion_erea"></div>
                      </div>
                </div>
                <div class="row">
                      <div class="form-group col-md-4">
                        <label for="date">Date d'inscription</label>
                        <input type="date" class="form-control" id="date_inscription" name="date_inscription">
                        <div id="date_area"></div>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Option">Option</label>
                        <select name="option" id="option" class="form-control">
                          <option value=""></option>
                          <option value="Payant">Payant</option>
                          <option value="Gratuit">Gratuit</option>
                        </select>
                        <div id="option_erea"></div>
                      </div>
                      <div class="form-group col-md-4">
                      <div id="phone">
                        <div id="phone">
                        <label for="Telephone" >Telephone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone">
                        <div id="telephone_erea"></div>
                        </div>
                        </div>
                        <div id="mail">
                        <label for="Email" >Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        
                        </div>
                      </div>
                </div>
              <div class="row">
              <div class="col-md-6">
              <div class="form-group rounded text-center py-3 dropzone" id="test_dropzone">
                  <div class="dz-message">
                      <i class="fa fa-download fa-2x text-muted" aria-hidden="true"></i>
                      <h4 class="text-muted">Clicker ici pour inserser une image.</h4>
                      <div id="file_area" ></div>
                  </div>
              </div>
          
                <!-- /.card -->
              </div>
              <div class="form-group col-md-6">
                <label for="Profile"> Decrire le Type de Trofile Rechercher</label>
                <textarea name="type_rechercher" id="type_rechercher" cols="30" rows="5" class="form-control"></textarea>
                <div id="profile_erea"></div>
              </div>
            </div>
                    </div>
                    <div class="card-footer text-center">
                      <div class="row">
                      <div class="form-group col-md-6">
                      <input type="button" class="btn btn-danger form-control" id="cancel" name="cancel" value="Annuler" >
                      </div>
                      <div class="form-group col-md-6">
                      <input type="submit" class="btn btn-primary form-control" id="valider" name="valider" value="Enregistrer" >
                      </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
              </div>
            </div>
        </div>
    </section>
</div>
<?php
include_once('admin_dash_footer.php')
?>
  <script>
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
  $("profession_erea").html("");
});
$('#situation').change(function(){
  $("#situation").removeClass('border border-danger');
  $("#situation_area").html("");
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
$('#date_inscription').change(function(){
  $("#date_inscription").removeClass('border border-danger');
  $("#ade_area").html("");
});
$('#type_rechercher').keyup(function(){
  $("#type_rechercher").removeClass('border border-danger');
  $("#profile_area").html("");
});
$('#option').change(function(){
  $("#option").removeClass('border border-danger');
  $("#option_area").html("");
});

//****************************Mutil select****************************** */
$('.select2bs4').select2({
      theme: 'bootstrap4'
    });

  $('.select2').select2()
//*********************Annuler///////************** */ */
$("#cancel").click(function(){
  $("#nom").val('');
  $("#age").val(''); 
  $("#ville").val(''); 
  $("#email").val(''); 
  $("#sex").val(''); 
              $("#profession").val(''); 
              $("#telephone").val('');
              $("#domaine").val('');
              $("#religion").val(''); 
              $("#niveau").val('');
              $("#option").val('');
              $("#date_inscription").val('');
              $("#situation").val('');
              $("#type_rechercher").val('');
});

Dropzone.autoDiscover = false;
    $(document).ready(function () {

        var dropzone = new Dropzone("#test_dropzone", {
                url: '../pages/admin_adding.php',
                clickable: true,
                method: 'POST',
                autoProcessQueue: false,
                paraName: 'file',
                maxFilesize: 10, //MB
                maxFiles: 1,
                acceptedFiles: 'image/*',
                addRemoveLinks: true,
                uploadMultiple: false,
                // thumbnailWidth: 600,
                // thumbnailHeight: 800,
                init: function () {
                    dzClosure = this;
                    $('#valider').on("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var erreur = [];
                        //----------------------------------------------------------------------------------------

                        if($("#nom").val() == null || $("#nom").val() == '' )
                        {
                            $("#nom").addClass('border border-danger')
                            erreur['class'] = 'Votre nom et prenom';
                            $("#nom_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#nom").removeClass('border border-danger');
                            $("#nom_area").html("");
                        }

                        //----------------------------------------------------------------------------------------
                        if($("#age").val() == '' || $("#age").val() == null )
                        {
                            $("#age").addClass('border border-danger')
                            erreur['class'] = 'Votre age';
                            $("#age_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#age").removeClass('border border-danger');
                            $("#age_area").html("");
                        }

                        if($("#profession").val() == '' || $("#profession").val() == null )
                        {
                            $("#profession").addClass('border border-danger')
                            erreur['class'] = 'Votre profession';
                            $("#profession_erea").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#profession").removeClass('border border-danger');
                            $("#profession_erea").html("");
                        }
                          //******************************************************************** */
                        if($("#ville").val() == null || $("#ville").val() == '' )
                        {
                            $("#ville").addClass('border border-danger')
                            erreur['class'] = 'Votre ville!';
                            $("#ville_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#ville").removeClass('border border-danger');
                            $("#ville_area").html("");
                        }
                          //******************************************************************** */
                        if($("#situation").val() == null || $("#situation").val() == '' )
                        {
                            $("#situation").addClass('border border-danger')
                            erreur['class'] = 'Veillez selection!';
                            $("#situation_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#situation").removeClass('border border-danger');
                            $("#situation_area").html("");
                        }
                          //******************************************************************** */
                        if($("#religion").val() == null || $("#religion").val() == '' )
                        {
                            $("#religion").addClass('border border-danger')
                            erreur['class'] = 'Votre religion!';
                            $("#religion_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#religion").removeClass('border border-danger');
                            $("#religion_area").html("");
                        }
                          //******************************************************************** */
                        if($("#telephone").val() == null || $("#nom").val() == '' )
                        {
                            $("#telephone").addClass('border border-danger')
                            erreur['class'] = 'Veillez remplir le numero!';
                            $("#telephone_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#telephone").removeClass('border border-danger');
                            $("#telephone_area").html("");
                        }
                        //   //******************************************************************** */
                        if($("#sex").val() == null || $("#sex").val() == '' )
                        {
                            $("#sex").addClass('border border-danger')
                            erreur['class'] = 'Votre sex s\'il vous plait!';
                            $("#sex_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#sex").removeClass('border border-danger');
                            $("#sex_area").html("");
                        }
                          //******************************************************************** */
                        if($("#niveau").val() == null || $("#niveau").val() == '' )
                        {
                            $("#niveau").addClass('border border-danger')
                            erreur['class'] = 'Veillez selection le niveau d\'etude';
                            $("#niveau_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#niveau").removeClass('border border-danger');
                            $("#niveau_area").html("");
                        }
  //******************************************************************** */
                        if($("#domaine").val() == null || $("#domaine").val() == '' )
                        {
                            $("#domaine").addClass('border border-danger')
                            erreur['class'] = 'Veillez choisir votre domaine';
                            $("#domaine_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#domaine").removeClass('border border-danger');
                            $("#domain_area").html("");
                        }
                          //******************************************************************** */
                        if($("#option").val() == null || $("#option").val() == '' )
                        {
                            $("#option").addClass('border border-danger')
                            erreur['class'] = 'Veillez selectionner une options';
                            $("#option_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#option").removeClass('border border-danger');
                            $("#option_area").html("");
                        }

                        //******************************************************************** */
                        if($("#date_inscription").val() == null || $("#date_inscription").val() == '' )
                        {
                            $("#date_inscription").addClass('border border-danger')
                            erreur['class'] = 'Veillez rensseigner la date d\'inscription';
                            $("#date_area").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#date_inscription").removeClass('border border-danger');
                            $("#date_area").html("");
                        }
                         //******************************************************************** */
                         if($("#type_rechercher").val() == null || $("#type_rechercher").val() == '' )
                        {
                            $("#type_rechercher").addClass('border border-danger')
                            erreur['class'] = 'Veillez remplir cette zone ';
                            $("#profile_erea").html("<div class='text-danger my-2'>"+ erreur['class']+"</div>");
                        }
                        else
                        {
                            $("#type_rechercher").removeClass('border border-danger');
                            $("#profile_erea").html("");
                        }

                        if (dzClosure.getQueuedFiles().length < 1) {
                            $(".dropzone").addClass("border border-danger");
                            erreur['file'] = 'Veillez choisir une image';
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
                        $(":input[name]", $("#add_user")).each(function () {
                            formData.append(this.name, $(':input[name=' + this.name + ']', $("#add_user")).val());
                        });
                    })

                    dzClosure.on("complete" , function (file) {
                        dzClosure.removeFile(file);
                    })
                },

                success: function (file, response) {

                    if (response === 'success') {
                        toastr.erro("Echec d'enregistrement");
                    }
                    else
                    {
                        toastr.success("Insertion reussi");
                        $('input[type="text"],input[type="tel"],input[type="email"],input[type="date"],input[type="tel"] select').val('');
                        $("#type_rechercher").val('');
                        $("#religion").val('');
                        $("#email").val('');
                        $("#telephone").val('');
                        $("#sex").val('');
                        $("#situation").val('');
                        $("#option_area").val('');
                        $("#religion").val('');
                        $("#ville").val('');
                        $("#niveau").val('');
                        $("#education").val('');
                        $("#option").val('');
                        $("#religion").val('');
                        $('#id_user').html(response)
                        $("#age").val('');
                        $("#id_user").attr("hidden",false)
                        window.location.href = "add_fin.php";
                        $_SESSION['add_user']= true;
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
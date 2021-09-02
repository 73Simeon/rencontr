<?php
include_once('admin_dash_header.php');
require('../pages/connexion.php');
?>
 
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
          <li class="nav-item menu-open">
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
                <a href="add_user.php" class="nav-link">
                  <i class="far fas fa-plus nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="all_users.php" class="nav-link active">
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Liste</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Listes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title" style="text-align: center;">listes des utilisateurs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive narrower">
                <table id="example2" class="table text-nowrap ">
                  <thead>
                  <tr>
                    <th>Actions</th>
                    <th>Nom et Prenom(s)</th>
                    <th>Age</th>
                    <th>Professsion</th>
                    <th>Ville</th>
                    <th>Genre</th>
                    <th>Niveau d'Etude</th>
                    <th>Domaine d'Etude</th>
                    <th>Situation Matrimoniale</th>
                    <th>Religion</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Profile Rechercher</th>
                    <th>Option</th>
                    <th>Status</th>
                    <th>Date d'Inscrption</th>
                    <th>Personne Inscrit</th>
                    <th>Photos</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
            
                       $data = "SELECT * FROM user order by id_users desc";
                       $value = $conn->prepare($data);
                       $value->execute();
                    ?>
                  
                    <?php  while ($dat = $value->fetch()):?> 
                      <tr>
                    <td>
                      <div class="btn-group" role="group" aria-label="Button group">
                      <button class="btn text-truncate  validation" name="valid" data-toggle="modal" id="<?=($dat['id_users'])?>"><i class="fas fa-check text-success"></i> </button>
                      <button class="btn text-truncate  edit_data" name="edit" data-toggle="modal" id="<?=($dat['id_users'])?>"><i class="fas fa-edit text-warning"></i> </button>

                      <!-- <input type="button" name="edit" value="Edit" id="<?//=($dat['id_user']) ?>" class="btn btn-info btn-xs edit_data" />  -->
                       <button class="btn text-truncate suprimmer_user" data-toggle="modal" id="<?=($dat['id_users'])?>"><i class="fas fa-trash text-danger"></i></button>
                      </div>
                    </td>
                    <td class="text-truncate"><?=($dat['NOM_PRENOM']) ?></td>
                    <td class="text-truncate"><?=($dat['AGE']) ?></td>
                    <td class="text-truncate"><?=($dat['PROFESSION']) ?></td>
                    <td class="text-truncate"><?=($dat['NOM_VILLE']) ?></td>
                    <td class="text-truncate"><?=($dat['GENRE']) ?></td>
                    <td class="text-truncate"><?=($dat['NIVEAU_ETUDE']) ?></td>
                    <td class="text-truncate"><?=($dat['NOM_DOMAINE']) ?></td>
                    <td class="text-truncate"><?=($dat['SITUATION_MATRI']) ?></td>
                    <td class="text-truncate"><?=($dat['RELIGION']) ?></td>
                    <td class="text-truncate"><?=($dat['TELEPHONE']) ?></td>
                    <td class="text-truncate"><?=($dat['EMAIL']) ?></td>
                    <td class="text-truncate"><?=($dat['PROFILE_RECHER']) ?></td>
                    <td class="text-truncate"><?=($dat['OPTIONS']) ?></td>
                    <td class="text-truncate"><?=($dat['STATUT']) ?></td>
                    <td class="text-truncate"><?=($dat['DATE_INSCRI']) ?></td>
                    <td class="text-truncate"><?=($dat['PERSONNE_INSCRI']) ?></td>
                    <td class="text-truncate"><?php echo "<img src='../pages/Image/".$dat['PHOTOS']."' class='img-fluid' alt='".$dat['PHOTOS']."' height='400px' width='200px'>"; ?></td>
                  </tr>
                  <!-- /.modal de modification des user -->
                  <?php //include('pages/actions/update_Modale.php'); ?>
                  <?php endwhile ?> 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Actions</th>
                    <th>Nom et Prenom(s)</th>
                    <th>Age</th>
                    <th>Professsion</th>
                    <th>Ville</th>
                    <th>Genre</th>
                    <th>Niveau d'Etude</th>
                    <th>Domaine d'Etude</th>
                    <th>Situation Matrimoniale</th>
                    <th>Religion</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Profile Rechercher</th>
                    <th>Option</th>
                    <th>Status</th>
                    <th>Date d'Inscrption</th>
                    <th>Personne Inscrit</th>
                    <th>Photos</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="resul">

            </div>
            </div>
        </div>
    </div>
</section>
<div id="add_data_Modal" class="modal fade" data-backdrop="static">  
      <div class="modal-dialog modal-xl">  
           <div class="modal-content">  
                <div class="modal-header bg-warning"> 
                <h4 class="modal-title">Modification</h4>  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <span id="resultat"></span>
                </div>  
                <div class="modal-body">  
                <form action="" method="post" role="form"  enctype="multipart/form-data" id="userForm" >
              <div class="form-row">
                <div class="col-md-4 form-group">
                <label for="nom" class="control-label col-lg-12">Nom & Prenom <span class="text-danger">*</span> </label>
                 <input type="hidden" name="employee_id" id="employee_id" class="form-control"/>  
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom ou Pseudo"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="profession" class="control-label col-lg-12">Profession <span class="text-danger">*</span></label>
                  <input type="text" name="profession" class="form-control" id="profession"   />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="age" class="control-label col-lg-12" >Age <span class="text-danger">*</span></label>
                  <input type="text" name="age" class="form-control" id="age"   />
                  <div class="validate"></div>
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
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="domaine" class="control-label col-lg-12">Domaine d'Etude <span class="text-danger">*</span></label>
                <input name="domaine" id="domaine" class="form-control">
                    
                                     
                   <div class="validate"></div>
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
                   <div class="validate"></div>
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
                  </select>                    
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="matrimonial" class="control-label col-lg-12" >Situation matrimoniale <span class="text-danger">*</span></label>
                <select name="matrimoniale" id="matrimoniale" class="form-control">
                  <option value=""></option>
                    <option value="Polygamie">Polygamie</option>
                    <option value="Celibataire sans Enfant">Celebataire sans enfant</option>
                    <option value="Voeuf">Voeuf</option>
                    <option value="Divorce">Divorce</option>
                    <option value="Celebataire avec Enfant">Celibataire avec enfant</option>
                  </select>                    
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                <label for="religion" class="control-label col-lg-12">Religion <span class="text-danger">*</span></label>
                <select name="religion" id="religion" class="form-control">
                    <option value="" selected></option>
                    <option value="Chretiens Catholique">Chretiens Catholique</option>
                    <option value="Chretiens Protestant">Chretiens Protestant</option>
                    <option value="Musulman">Musulman</option>
                    <option value="Animiste">Animiste</option>
                    <option value="Non Precise">Non Precise</option>
                  </select>                          
                 <div class="validate"></div>
                </div>
              </div>
             <div class="form-row">
              <div class="col-md-4 form-group">
                <label for="telephone" class="control-label col-lg-12">Numero de Telephone ou WhatsApp <span class="text-danger">*</span></label>
                <input type="tel" name="telephone" id="telephone" class="form-control">
              </div>  
              <div class="col-md-4 form-group">
                <label for="email" class="control-label col-lg-12">Email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div> 
              <div class="col-md-4 form-group">
                <label for="option" class="control-label col-lg-12" >Option <span class="text-danger">*</span></label>
                <select name="option" id="option" class="form-control"> 
                  <option value="Payant">Payant</option>
                  <option value="Gratuit">Gratuit</option>
                </select>
              </div> 
              </div>
              <div class="row">
              <div class="col-md-4">
              <label for="option" class="control-label col-lg-12" >Status <span class="text-danger">*</span></label>
                <select name="status" id="status" class="form-control"> 
                  <option value=""></option>
                  <option value="En Relation">En Relation</option>
                  <option value="Non en Relation">Non en Relation</option>
                </select>
              </div>
          
              <div class="col-md-4">
              <label for="option" class="control-label col-lg-12" >Personne Inscrit <span class="text-danger">*</span></label>
               <input type="text" id="person_inscrit" name="person_inscrit" class="form-control">
              </div><!-- /.card -->
              <div class="col-md-4">
              <label for="date" class="control-label col-lg-12" >Date d'inscription <span class="text-danger">*</span></label>
               <input type="date" id="date_inscription" name="date_inscription" class="form-control">
              </div>
            </div>
            <div class="form-group col-md-12">
                <label for="Profile"> Decrire le Type de Trofile Rechercher</label>
                <textarea name="profile" id="profile" cols="30" rows="5" class="form-control"></textarea>
                <div id="profile_erea"></div>
              </div>
              <div class="text-center">
                <button type="submit" class="col-md-6 form-group btn btn-warning w-100"  id="modifier" name="modifier"> Valider</button>
                </div>
                </div>    
           </div>  
      </div>  
 </div> 
 
          <!-- /.modal-content -->
</div>
<div id="validate" class="modal fade" data-backdrop="static">  
      <div class="modal-dialog modal-md">  
           <div class="modal-content">  
                <div class="modal-header bg-success"> 
                <h4 class="modal-title">Validation</h4>  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <span id="resultat"></span>
                </div>  
                <div class="modal-body">  
                <form action="" method="post" role="form"  enctype="multipart/form-data" id="userValidattion" >
              <div class="row">
              <input type="text" name="id_valid" id="id_valid" class="form-control"/> 
              <span class="text-danger text-center" id='messagevalideation' hidden><i> Cette personner a ete valide</i></span>
              <label for="option" class="control-label col-lg-12" >Status <span class="text-danger">*</span></label>
              
                <select name="statut" id="statut" class="form-control"> 
                  <option value=""></option>
                  <option value="En Relation">En Relation</option>
                  <option value="Non en Relation">Non en Relation</option>
                </select>
              </div>
              <div class="text-center mt-3">
                <button type="submit" class="col-md-6 form-group btn btn-success w-100"  id="valider" name="valider"> Valider</button>
                </div>
                </form>
                </div>    
           </div>  
      </div>  
 </div> 
 
          <!-- /.modal-content -->
</div>
<?php 
include_once('admin_dash_footer.php')
?>
<script>


///************************DATAT TABLE IN JQUEY FORM********************************* */
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
      "scrollX": true,
      "scrollY": "500px",
      "buttons": ["copy", "csv", "excel", "print", "colvis"],
      
      initComplete: function () {
      this.api().columns().every( function () {
          var column = this;
          var search = $(`<input class="form-control form-control-sm" type="text" placeholder="Search">`)
              .appendTo( $(column.footer()).empty() )
              .on( 'change input', function () {
                  var val = $(this).val()

                  column
                      .search( val ? val : '', true, false )
                      .draw();
              } );

      } );
  }
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  });


// validation des donnee
// validation des donnee

 //row row to edite data in on the table 
 $(document).ready(function(){ 
  $(document).on('click', '.validation', function(){  
           var id_valid = $(this).attr("id");  
           $.ajax({  
                url:"../pages/ajax/fetch.php",  
                method:"POST",  
                data:{id_valid:id_valid},  
                dataType:"json",  
                success:function(data){  
                      $('#statut').val(data.STATUT);
                      $('#id_valid').val(data.id_users); 
                      $('#validate').modal('show'); 
                }  
           });  
      }); 
    });
$(document).ready(function(){
  $(document).on("click",".valider", function(e){
    e.preventDefault();
        $.ajax({
          url:"../pages/ajax/validate.php",
          method: "POST",
          data:$('#userValidattion').serialize(),
          success: function(data){
            if(data){
            $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Reussi',
            subtitle: 'Validation',
            body: 'Votre validation a bien reussi'});
                 
          }
          else{
            toastr.error("erreur s'est produit");
          }
          }
          
        });
    }) ;
});

 //row row to edite data in on the table 
 $(document).ready(function(){ 
  $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"../pages/ajax/fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                      $('#nom').val(data.NOM_PRENOM);  
                      $('#age').val(data.AGE);  
                      $('#sex').val(data.GENRE);  
                      $('#telephone').val(data.TELEPHONE);  
                      $('#profession').val(data.PROFESSION);  
                      $('#employee_id').val(data.id_users); 
                      $('#niveau').val(data.NIVEAU_ETUDE);   
                      $('#domaine').val(data.NOM_DOMAINE);    
                      $('#religion').val(data.RELIGION);  
                      $('#date_inscription').val(data.DATE_INSCRI);  
                      $('#profile').val(data.PROFILE_RECHER);  
                      $('#status').val(data.STATUT);  
                      $('#email').val(data.EMAIL);  
                      $('#matrimoniale').val(data.SITUATION_MATRI);  
                      $('#person_inscrit').val(data.PERSONNE_INSCRI);
                      $('#ville').val(data.NOM_VILLE);  
                      $('#option').val(data.OPTIONS);    
                      $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
    });

//***************************Data to edit */
$(document).ready(function(){
  $(document).on('click','#modifier',function(e){
    e.preventDefault();

    $.ajax({
      url:"../pages/actions/update_Modale.php",
      method: "POST",
      data:$('#userForm').serialize(),
      success: function(data){
        if(data){
        $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Reussi',
        subtitle: 'Modification',
        body: 'Votre modification a bien reussi'});
        window.location.reload();        }
       else{
         toastr.error("erreur s'est produit");
       }
      }
      
    });
  });
});





//************************delete */

$(document).ready(function(){
    $('.suprimmer_user').click(function(e){
        e.preventDefault();
          var pid = $(this).attr('id');
          var parent = $(this).parent("td").parent("tr");
            bootbox.dialog({
              message: "vouler vous vraiment supprimer?",
              title: "<i class='glyphicon fa fas-trash bg-danger'></i> Supprimer !",
              buttons: {
              success: {
                label: "Non",
                className: "btn-success",
                callback: function() {
                $('.bootbox').modal('hide');
                }
              },
              danger: {
                label: "Oui!",
                className: "btn-danger",
                callback: function() {
                $.ajax({
                  type: 'POST',
                  url: "../pages/actions/supprimer.php",
                  data: 'delete='+pid
                  
                })
                .done(function(response){
                //toastr.success('Suppresion reussi!');
                $(document).Toasts('create', {
                class: 'bg-success',
                title: 'Success',
                subtitle: 'Supression',
                body: 'Votre supression a ete validee.'});
                window.location.reload();
                })
                .fail(function(){
                  toastr.error(" Erreur s'est produit!");       
                })
              
      }
    }
     }
   });
   
   
  });
  
 });
</script>
</body>
</html>
<?php
require_once '../pages/connexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Site de Rencontre</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-danger">
    <div class="card-header text-center">
      <a href="../index.php" class="h1">Site de Rencontre</a>
    </div>
    <div class="card-body">
    <span id="message" class="login-box-msg text-danger"></span>
      <p class="login-box-msg">Valider les champs</p>
       
      <form action="fetch.php" method="post">
        <div class="input-group mb-3">
        <input type="number" id="txt_uname" name="txt_uname" class="form-control" placeholder="votre id">
          </div>
        <div class="input-group mb-3">
         <select id="txt_pwd" name="txt_pwd" class="form-control">
           <option value="">Votre Genre</option>
           <option value="Homme">Homme</option>
           <option value="Femme">Femme</option>
         </select>
          </div>
          <div class="input-group mb-3">
          <input type="button" name="but_submit" id="but_submit" class="form-control bg-success" value="Valider">
          </div>
        </div>
      </form>
     </div>
     <?php ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
<script>
  
$(document).ready(function(){

$("#but_submit").click(function(){
    var username = $("#txt_uname").val().trim();
    var password = $("#txt_pwd").val().trim();

    if( username != "" && password != "" ){
        $.ajax({
            url:'fetch.php',
            method:'post',
            data:{username:username,password:password},
            success:function(response){
                var msg = "";
                if(response == 1){
                    window.location.href = "relation.php";
                    $_SESSION['realtion'] = true;
                }else{
                    msg = "Invalid username and password!";
                }
                $("#message").html(msg);
                
            }
        });
    }
});

});

 
</script>


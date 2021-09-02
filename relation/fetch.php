<?php
require '../pages/connexion.php';
$id = $_POST['username'];
$sex = $_POST['password'];


if ($id != "" && $sex != ""){

    $sql_query = "SELECT count(*) as cntUser FROM user WHERE id_users='".$id."' and GENRE='".$sex."'";
    $result = $conn->prepare($sql_query);
    $result->execute();
    $row = $result->fetch();

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $id;
        $_SESSION['usex'] = $sex;
        echo 1;
    }else{
        echo 0;
    }
}
?>
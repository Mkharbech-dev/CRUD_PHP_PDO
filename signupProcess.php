<?php
if(isset($_POST['save'])){
    require_once ("User.php");
    $sc = new User();
    $sc->setFirstname($_POST['firstname']);
    $sc->setLastname($_POST['lastname']);
    $sc->setAddress($_POST['address']);
    if(!empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['address'])){
        $sc->insertData();
    }
    header('Location: ListUsers.php');
    //echo"<script>alert('data saved successfully'); document.location='ListUsers.php'</script>";
}

?>
<?php
require_once ('User.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
$user = new User();
$user->setId($id);
$user->delete();
header('Location: ListUsers.php');
}

?>
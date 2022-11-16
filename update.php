<?php
require_once ('User.php');
$user = new User();
$id =$_GET['id'];
$user->setId($id);


if(isset($_POST['edit'])){
    $user->setFirstname($_POST['firstname']);
    $user->setLastname($_POST['lastname']);
    $user->setAddress($_POST['address']);
    $user->update();
    header('Location: ListUsers.php');
}

$res = $user->fetchOne();
$val= $res[0];
?>
<!DOCTYPE html>
<html lang="en">
<?php include './inc/head.php' ?>
<body>
    <h1 class="text-center mt-5">Modification d'un utilisateur</h1>
    <br><br>
    <div class="container" >
    <form class="container" action="" method = "POST">
        <div class="mb-3">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $val['lastname'] ;?>"> 
        </div>
        <div class="mb-3">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $val['firstname'];?>"> 
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="address" value="<?php echo $val['address'];?>"> 
        </div>
        <button type="submit" class="btn btn-primary mb-5" name="edit">Modifier</button>
    </form>
    </div>
    

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>
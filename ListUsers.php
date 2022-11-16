
<!DOCTYPE html>
<html lang="en">
<?php include './inc/head.php' ?>
<body>
<div class="container mt-5">
    <h2>Ensemble des utilisateurs</h2>
    <center class="my-5">
    <a class="btn btn-success" href="signup.php"><p>Ajouter un utilisateur</p></a>
    </center>
   <table  class="table table-hover"> 
   <tr class='text-center bg-dark text-white'>
   <th>Nom</th>
   <th>Prenom</th>
   <th>Adresse</th>
   <th colspan="2">Action</th>
   </tr>

   <?php
   require_once ('User.php');
   $data = new User();
   $res = $data->fetchAll();
  foreach ($res as $row) {
    echo "<tr class='text-center' >";
    echo "<td>" . $row["lastname"] . "</td>";
    echo "<td>" . $row["firstname"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "<td><button class='btn btn-warning'><a class= 'text-white text-decoration-none' href='update.php?id=".$row['id']." &firstname=".$row['firstname']." &address=".$row['address']."'> Modifier </a></button></td>";
    echo "<td><button class='btn btn-danger'><a class= 'text-white text-decoration-none' href='delete.php?id=".$row['id']." &firstname=".$row['firstname']." &address=".$row['address']."' >Supprimer</a></button</td>";
}
?>
</table>

</div>
</body>
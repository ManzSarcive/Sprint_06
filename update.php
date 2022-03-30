<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from `vapfactory` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$reference = $row['reference'];
$name = $row['nom'];
$descrip = $row['descrip'];
$prixachat = $row['prix_achat'];
$prixvente = $row['prix_vente'];
$stock = $row['stock'];

if (isset($_POST['submit'])) {
  $reference = $_POST['reference'];
  $name = $_POST['name'];
  $descrip = $_POST['descrip'];
  $prixachat = $_POST['prixachat'];
  $prixvente = $_POST['prixvente'];
  $stock = $_POST['stock'];

  $sql = "update `vapfactory` set id=$id, reference='$reference',
     nom='$name', descrip='$descrip', 
     prix_achat='$prixachat', prix_vente='$prixvente', 
     stock='$stock' where id=$id";

  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "updated product successfully";
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Ajouter Vapoteuse</title>
</head>

<body>
  <div class="container">
    <form method='POST' action="">
      <div class="mb-3">
        <label>Reference</label>
        <input type="text" class="form-control" placeholder='Enter the reference of the product...' name='reference' value=<?php echo $reference; ?>>
      </div>

      <div class="mb-3">
        <label>name</label>
        <input type="text" class="form-control" name='name' value=<?php echo $name; ?>>
      </div>

      <div class="mb-3">
        <label>Description</label>
        <textarea class="form-control" name='descrip'> <?php echo $descrip; ?></textarea>
      </div>

      <div class="mb-3">
        <label>Buying price</label>
        <input type="text" class="form-control" name='prixachat' value=<?php echo $prixachat; ?>>
      </div>

      <div class="mb-3">
        <label>Selling price</label>
        <input type="text" class="form-control" name='prixvente' value=<?php echo $prixvente; ?>>
      </div>

      <div class="mb-3">
        <label>Stock</label>
        <input type="text" class="form-control" name='stock' value=<?php echo $stock; ?>>
      </div>



      <button type="submit" class="btn btn-primary" name='submit'>Update</button>
    </form>
    </form>


  </div>


</body>

</html>
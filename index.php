<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $reference=$_POST['reference'];
    $name=$_POST['name'];
    $descrip=$_POST['descrip'];
    $prixachat=$_POST['prixachat'];
    $prixvente=$_POST['prixvente'];
    $stock=$_POST['stock'];

    $sql="insert into `vapfactory`(reference, nom, descrip, prix_achat, prix_vente, stock) values('$reference', '$name', '$descrip', '$prixachat', '$prixvente', '$stock')";
    $result=mysqli_query($con, $sql);
    if($result){
        // echo"produit valide";
        header('location:display.php');
    } else{
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
    <form method='post'>
  <div class="mb-3">
    <label>Reference</label>
    <input type="text" class="form-control" placeholder='Enter the reference of the product...' name='reference'>
  </div>

  <div class="mb-3">
    <label>name</label>
    <input type="text" class="form-control" placeholder='Enter the name of the product...' name='name'>
  </div>

  <div class="mb-3">
    <label>Description</label>
    <input type="text" class="form-control" placeholder='Enter the description of the product...' name='descrip'>
  </div>

  <div class="mb-3">
    <label>Buying price</label>
    <input type="text" class="form-control" placeholder='Enter the buying price...' name='prixachat'>
  </div>

  <div class="mb-3">
    <label>Selling price</label>
    <input type="text" class="form-control" placeholder='Enter the selling...' name='prixvente'>
  </div>
    
  <div class="mb-3">
    <label>Stock</label>
    <input type="text" class="form-control" placeholder='Enter the number of stock...' name='stock'>
  </div>


  
  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
</form>
</form>


    </div>


  </body>
</html>
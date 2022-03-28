<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $reference=$_POST['reference'];
    $name=$_POST['name'];
    $descrip=$_POST['descrip'];
    $prixachat=$_POST['prixachat'];
    $prixvente=$_POST['prixvente'];
    $stock=$_POST['stock'];
    $type=$_POST['type'];

    $sql="insert into `vapfactory`(reference, nom, descrip, prix_achat, prix_vente, stock, type) values('$reference', '$name', '$descrip', '$prixachat', '$prixvente', '$stock', '$type')";
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
    <link rel="icon" type="image/x-icon" href="logo-vectoriel-vape-store_10051-138.webp">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="logo-vectoriel-vape-store_10051-138.webp" alt="logo" width="100" height="100">
  <div class="container-fluid">
    <a class="navbar-brand" href="display.php">Table of products</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav> <br>


    <div class="container">
    <form method='post'>
  <div class="mb-3">

  <input type="radio" id="dewey" name="type" value="vap">
  <label for="dewey">Vap</label> 

  <input type="radio" id="daway" name="type" value="E-liquide">
  <label for="daway">E-liquide</label> <br> <br>


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
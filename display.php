<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vap Factory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="logo-vectoriel-vape-store_10051-138.webp">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<img src="logo-vectoriel-vape-store_10051-138.webp" alt="logo" width="100" height="100">
<h1 class="text-center text-shadow">Welcome to the product board </h1>

<div class="container">

<button class='btn btn-success my-5'><a class="text-decoration-none text-light" href="index.php" class='text-light'>Add vap</a> </button>
<table class="table table-striped table-hover">
  <thead>
    <tr class="table-active table-info sticky-top">
      <th scope="col">Reference</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Buying price</th>
      <th scope="col">Selling price</th>
      <th scope="col">Stock</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql='select * from `vapfactory` order by id desc';
$result=mysqli_query($con, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $reference=$row['reference'];
        $name=$row['nom'];
        $descrip=$row['descrip'];
        $prixachat=$row['prix_achat'];
        $prixvente=$row['prix_vente'];
        $stock=$row['stock'];
        $type=$row['type'];
        echo ' <tr class="table-warning">
        <td>'.$reference.'</td>
        <td>'.$name.'</td>
        <td>'.$descrip.'</td>
        <td>'.$prixachat.'</td>
        <td>'.$prixvente.'</td>
        <td>'.$stock.'</td>
        <td>'.$type.'</td>
        <td>
        <a class="text-decoration-none"href="update.php?updateid='.$id.'" class="text-light">
        <button class="btn btn-primary">✏️</a>
        <a class="text-decoration-none"href="delete.php?deleteid='.$id.'" class="text-light">
        <button class="btn btn-danger">❌</a></button>
        </td>
        </tr>';
    }

}


?>


</tbody>
</table>


</div>
    
</body>
</html>
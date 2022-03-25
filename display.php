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

</head>
<body>

<div class="container">

<button class='btn btn-primary my-5'><a href="index.php" class='text-light'>Ajouter Vapoteuse</a> </button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Reference</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Buying price</th>
      <th scope="col">Selling price</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql='select * from `vapfactory`';
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
        echo ' <tr>
        <td>'.$reference.'</td>
        <td>'.$name.'</td>
        <td>'.$descrip.'</td>
        <td>'.$prixachat.'</td>
        <td>'.$prixvente.'</td>
        <td>'.$stock.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
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
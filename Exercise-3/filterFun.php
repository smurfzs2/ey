<?php include('connection.php'); ?>
<?php

    // if(isset($_POST['search']))
    // {
    //     $keyword = $_POST['keyword'];
    //     $sql = "SELECT * FROM `tbl_khenneth` WHERE CONCAT(firstName,lastName) LIKE '%".$keyword."%' ";
    //     $sqlQuery = mysqli_query($con, $sql);

    // }
    // else{
    //     $sql = "SELECT * FROM `tbl_khenneth`";
    //     $sqlQuery = mysqli_query($con, $sql);
    // }

    

?>
<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
		
		$query = mysqli_query($con, "SELECT * FROM `tbl_khenneth` WHERE `firstName` LIKE '%$keyword%' ORDER BY `firstName`");
		while($fetch = mysqli_fetch_array($query)){
	?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $fetch['id']?></th>
      <td><?php echo $fetch['firstName']?> </td>
      <td><?php echo $fetch['lastName']?></td>
      <td><?php echo $fetch['birthDate']?></td>
      <td><?php echo $fetch['address']?></td>
      <td><?php echo $fetch['gender'] == 0 ? "Male":"Female"; ?></td>
    </tr>
    
  </tbody>
</table>
<?php
		}
	?>
</body>
</html>

<?php
	// }
?>




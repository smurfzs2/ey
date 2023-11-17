<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <title>Exercise 3 (Update, Insert, Delete, Search Query)</title>
</head>

<body class="">

    <?php
        if(ISSET($_POST['search']))
        {
            $fname_keyword = $_POST['fname_keyword'];
            $lname_keyword = $_POST['lname_keyword'];
            $address_keyword = $_POST['address_keyword'];
            $bdate_keyword = $_POST['bdate_keyword'];
            $gender_keyword = $_POST['gender_keyword'];
    ?>

    <div class="container mt-5">
        <!-- <h1>
            <?php echo $_POST['fname_keyword']; ?> 
            <?php echo $_POST['lname_keyword']; ?>
            <?php echo $_POST['address_keyword']; ?>
            <?php echo $_POST['bdate_keyword']; ?>
            <?php echo $_POST['gender_keyword']; ?>
        </h1> -->

                    <form action="#" method="POST" class="">
                        <div class="mt-2 mb-3 align-center">
                            <div class="card shadow border-0 m-5 p-4 align-items-center w-80">

                                <!-- fname_keyword func -->
                                <input type="text" name="fname_keyword" value="<?php echo isset($_POST['fname_keyword']) ? $_POST['fname_keyword'] : '' ?>" class="rounded form-control w-100 mb-1" placeholder="First Name">
                                
                                <!-- lname_keyword func -->
                                <input type="text" name="lname_keyword" value="<?php echo isset($_POST['lname_keyword']) ? $_POST['lname_keyword'] : '' ?>" class="rounded form-control w-100 mb-1" placeholder="Last Name">
                                
                                <!-- address_keyword func -->
                                <input type="text" name="address_keyword" value="<?php echo isset($_POST['address_keyword']) ? $_POST['address_keyword'] : '' ?>" class="rounded form-control w-100 mb-1" placeholder="Address">
                                
                                <!-- bdate_keyword func -->
                                <input type="text" name="bdate_keyword" value="<?php echo isset ($_POST['bdate_keyword']) ? $_POST['bdate_keyword'] : '' ?>" class="rounded form-control w-100 mb-1" placeholder="Birth Date">
                            
                            <!-- gender_keyword func -->
                                <!-- <label class="">Gender</label> -->
                                <select class="p-1 form-control w-100 mb-2 "  name="gender_keyword">
                                    <option value="">--Gender--</option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                           
                            <!-- <input type="text" name="gender_keyword" value="<?php echo isset($_POST['gender_keyword']) ? $_POST['gender_keyword'] : '' ?>" class="rounded" placeholder="Gender"> -->
                            <button type="submit" name="search" class="btn btn-success px-5 w-100">Search</button>
                            </div>
                        </div>
                    </form>
    
            <!-- <a href="khenneth_add.php" class="btn btn-info mb-3  mx-2 shadow" style="float: right;"><i class="fas fa-plus px-2"></i> Add New</a> -->
        
        <?php
            $query = "SELECT * FROM tbl_khenneth WHERE firstName LIKE '%$fname_keyword%' and lastName LIKE '%$lname_keyword%' and address LIKE '%$address_keyword%' and birthDate LIKE '%$bdate_keyword%' and gender LIKE '%$gender_keyword%' ";
            $queryRes = $con->query($query);
        
                if($res= $queryRes->num_rows > 0)
                {
                    ?>
                        <table class="table table-hover table-striped table-bordered text-center mb-5">
                            <thead class="bg-dark text-white">
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Birth Date</th>
                                <th scope="col">Gender</th>
                                <!-- <th scope="col">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                    <?php

                    $i = 0;
                    while($row = $queryRes->fetch_assoc())
                    {
                        ?>
                            <tr>
                                <th scope="row"><?php echo ++$i; ?></th>
                                <td><?php echo $row["firstName"];?></td>
                                <td><?php echo $row["lastName"];?></td>
                                <td><?php echo $row["address"];?></td>
                                <td><?php echo $row["birthDate"];?></td>
                                <td><?php echo $row["gender"] == 0 ? "Male" : "Female";  ?></td>
                                <!-- <td> -->
                                        <!-- <a href="khenneth_update.php?id=<?php echo $row["id"];?>" class="btn btn-success">Edit</a>
                                        <a href="index.php?id=<?php echo $row["id"];?>" class="btn btn-danger">Delete</a> -->
                                        <!-- <button type="submit" name="deleteBtn" value="<?php echo $row["id"];?>" class="btn btn-danger">Delete</button> -->
                                <!-- </td> -->
                            </tr>
                        <?php 
                    }
                }
                else
                {
                    echo '<span class="col-6 text-center">No data found.</span>';
                }

                    ?>
                        </tbody>
                        </table> 
                    <?php
        ?>
    </div>
        <?php
            }
        ?>
</body>
</html>
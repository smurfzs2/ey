<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <title>Exercise 2 (Select Query)</title>
</head>

<body class="m-4">

    <div class="container">
           
        <?php

            $query = "SELECT * FROM tbl_khenneth";
            $queryRes = $con->query($query);
        
                if($res= $queryRes->num_rows > 0)
                {
                    
                    ?>
                   
                    <table class="table table-striped table-hover table-bordered text-center">
                                    <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Birth Date</th>
                                        <th scope="col">Gender</th>
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
                                   
                                </tr>
                                        
                            <?php 
                    }
                   
                }

            ?>
                </tbody>
                </table>
                
            <?php

        ?>
    </div>
</body>
</html>



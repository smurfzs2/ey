<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Add New</title>
</head>
<body>

<?php
    if(isset($_POST['submitBtn']))
    {
        $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
        $birthDate = mysqli_real_escape_string($con, $_POST['birthDate']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
    
        $query = "INSERT INTO tbl_khenneth (firstName, lastName, birthDate, address, gender) 
        VALUES ('$firstName', '$lastName', '$birthDate', '$address', '$gender')";
        $query_res =$con->query($query);
    
        if($query_res)
        {
            header("Location: index.php");
        }else {
            header("Location:  index.php");
        }
    }
?>

    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="container  mt-1">
            <div class="card p-5 border-0 align-items-center m-0">
                <div class=" card-body border rounded p-3 w-50 ">
                    <h3 class="text-center mb-4">Add Info</h3>
                        <div class="mb-2">
                            <div class="mb-1">
                                <label>First Name</label>
                            </div>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>

                    <div class="mb-2">
                        <div class="mb-1">
                            <label>Last Name</label>
                        </div>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>

                    <div class="mb-2">
                        <div class="mb-1">
                            <label>Birth Date</label>
                        </div>
                        <input type="date" class="form-control" name="birthDate" required>
                    </div>

                    <div class="mb-2">
                        <div class="mb-1">
                            <label>Address</label>
                        </div>
                        <textarea name="address" id="" cols="30" rows="2" class="form-control" required></textarea>
                    </div>
                    <hr>
                    <div class="mt-1 p-1">
                        <span>Gender</span>
                        <div class="px-2 mr-3">
                            <input type="radio" name="gender" class="" value="0"  id="male" required>
                            <label for="male">Male</label>

                            <div>
                                <input type="radio" name="gender"  value="1" id="female" required>
                                <label for="female">Female</label>
                            </div>
                            
                        </div>
                        
                       
                        
                    </div>

                    <div class="mt-3">
                        <input type="submit" name="submitBtn" class="btn btn-success w-100 mt-3 mb-4">
                        <!-- <button type="submit" name="submitBtn" class="btn btn-success w-100 mt-3 mb-4">Submit</button> -->
                    </div>
                </div>
 
            </div>
            
        </div>
        
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
    <title>Document 2</title>
</head>
<style>
   
</style>
<body>

   
    <div class="container mt-5">
        <h1 class="text-center">POST FORM</h1> 
            <div class="card border shadow align-items-center m-5 p-5">
                <div class="card-body">
                     <h1>First Name: <?php echo $_GET['fname']; ?></h1>
                    <h1>Last Name: <?php echo $_GET['lname']; ?></h1>

                    <form action="get_form.php" method="POST">
                        <input type="hidden" name="fname" value="<?php echo $_GET['fname']; ?>">
                        <input type="hidden" name="lname" value="<?php echo $_GET['lname']; ?>">
                        <input type="hidden" name="gender" value="<?php echo $_GET['gender'] == '0' ? "Male":"Female"; ?>">
                        <h5>Birth Date: <input type="date" name="bdate" id="" required></h5>

                        <input type="submit" value="Submit" class="btn btn-success w-100 mt-3"> 
                    </form>
                </div>
                <button type="button" class="btn text-center" onclick="history.back();">Back</button> 
            </div>       
    </div>
    
    
</body>
</html>


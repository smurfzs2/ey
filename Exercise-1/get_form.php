<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
    <title>Document 3</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Your Data</h1>
            <div class="card border shadow align-items-center m-5 p-5">
                <div class="card-body">
                     <input type="hidden" name="fname" value="<?php echo $_POST['fname']; ?>">
                <h1>First Name: <?php echo $_POST['fname']; ?></h1>
                <h1 class="mb-1">Last Name: <?php echo $_POST['lname']; ?></h1>
                <h1 class="mb-1">Gender: <?php echo $_POST['gender']; ?></h1>
                <h3 class="mb-5 mt-2">Birth Date: <?php echo $_POST['bdate']; ?></h3>

            </div>
            <button type="button" class="btn" onclick="history.back();">Back</button>
           
            </div>
    </div>
</body>
</html>
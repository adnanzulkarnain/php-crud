<?php
// Call file connect.php
include_once("connect.php");

// --------------------------------------------
// Part 1.
// Retrieve data from database 
// and showing at form
// --------------------------------------------


// get id from url
$id = $_GET['id'];

// retrieve data by id
$result = mysqli_query($mysqli, "SELECT * FROM tbsiswa WHERE id=$id");

// Prepare the data to be printed to the form
while($data = mysqli_fetch_array($result)) {
    $name = $data['name'];
    $address = $data['address'];
}

// --------------------------------------------
// Part 2.
// The process of updating data according 
// to the form entered
// --------------------------------------------

// Checks whether the user has pressed the update button
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];

    // sql query to update data
    mysqli_query($mysqli, "UPDATE tbsiswa SET name='$name',address='$address' WHERE id=$id");

    // Redirect page to show.php
    header("Location: show.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- Call css bootstrap -->
     <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form name="update_user" method="post" action="edit.php">
                <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control" name="name" placeholder="name" value=<?php echo $name;?>>
                </div> 
                <div class="form-group">
                    <label>address</label>
                    <input type="text" class="form-control" name="address" placeholder="address" value=<?php echo $address;?>>
                </div>
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                <button type="submit" name="update" class="btn btn-primary">Update</button>        
            </form>
        </div>
    </div>
</div>
    
</body>
</html>
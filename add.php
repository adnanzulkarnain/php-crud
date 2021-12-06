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
<?php
// isset() is a function
// to check an object of the form, is there any
// or not the value thrown from a form.


if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];

    // include file koneksi.php
    include_once("connect.php");

    // Insert data into the tbsiswa table
    mysqli_query($mysqli, "INSERT INTO tbsiswa(name,address) VALUES('$name','$address')"); 
    
    // Redirect page to show.php
    header("Location: show.php");
}
?>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <form action="add.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
            <a href="show.php" class="btn btn-default">Cancel</a>
            </form>
            </div>
        </div>
    </div>

</body>
</html>
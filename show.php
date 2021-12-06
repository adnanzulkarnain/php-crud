<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <?php
        include_once("connect.php");

        $result = mysqli_query($mysqli,"Select * from tbsiswa ORDER by id DESC");
    ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <br>
            <br>
            <a href="add.php" class="btn btn-primary">Add Data</a>
            <br>
            <br>

            <table class="table">

<thead>
 <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Address</th>
     <th>Action</th>
 </tr>
</thead>
<tbody>


 <?php
     
     while ($data = mysqli_fetch_array($result)){

         echo "<tr>";
         echo "<td>".$data['id']."</td>";
         echo "<td>".$data['name']."</td>";
         echo "<td>".$data['address']."</td>";
         echo "<td>
                <a class='btn btn-primary btn-xs' href='edit.php?id=$data[id]'>Edit</a>
                <a class='btn btn-danger btn-xs' href='#' onclick='deleteData($data[id])'>Delete</a></td></tr>";  
         echo "</tr>";
     }

 ?>

 </tbody>

</table>



            </div>
        </div>
    </div>


    <script language="JavaScript" type="text/javascript">
      function deleteData(id){
        if (confirm("Are you sure you want to delete this data?")){
          window.location.href = 'delete.php?id=' + id;
        }
      }
    </script>

    
</body>
</html>
<?php
    include("function.php");
    $objCrudAdmin = new crudApp();

    if(isset($_POST['add_info'])){
        $return_msg = $objCrudAdmin-> add_data($_POST);
    }
    $objCrudAdmin->display_data();
?>

<!doctype html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CURD APP</title>
  </head>
  <body>
    <div class="container my-4 p-4 shadow">
        <h2><a style="text-decoration: none;" href="index.php">SabbirIt Student Database</a></h2>
        <form class="form" action="" method="post" enctype="multipart/form-data">
            <input type="text" name="std_name" class="form-control mb-2" placeholder="Enter Your Name" required>
            <input type="number" name="std_roll" class="form-control mb-2" placeholder="Enter Your Roll" required>
            <label for="image" class="p-2 text-primary">Upload Your Image</label>
            <input type="file" name="std_img" class="form-control mb-2">
            <input type="submit" name="std_info" class="form-control bg-warning">
        </form>

    </div>

    <div class="container my-4 p-4 shadow">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Sabbir</td>
                    <td>477470</td>
                    <td></td>
                    <td>
                        <a class="btn btn-success" href="#">Edit</a>
                        <a class="btn btn-warning" href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
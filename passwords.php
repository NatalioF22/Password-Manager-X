<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Password Manager - X</title>
</head>
<body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-dark navbar-ligth mb-5">
            <div class="container-xxl bg-info border rounded-3">
                <a href="#intro" class="navbar-brand">
                    <span class="fw-bold text-secondary">
                        Password Manager - X
                    </span>
                </a>
                <!-- toggle button for mobile nav -->
                <a class="nav-link" href="index.php">Home</a>
            </div>
        </nav>

<?php
           
            $connection = mysqli_connect("localhost","Natalio","");
            $db = mysqli_select_db($connection,'PM');
            $query = "SELECT * FROM Data";

            $query_run = mysqli_query($connection, $query);

            
?>
<table class="table table-dark container-lg justify-content-around my-5 border-2 ">
  <thead>
    <tr>
      
      <th scope="col">Domain</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
        if($query_run){
        while($row = mysqli_fetch_array($query_run)){

            ?>
           
  <tbody>
    <tr>
   
      <td><?php echo $row['domain']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td>
      <form action="update.php" method="post">
            <input type="hidden" name ="id" value="<?php echo $row['id']?>">
            <input type="submit" name = "edit" value="UPDATE" class="btn btn-success btn-sm "> 
        </form>
        
        <form action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <input type="submit" name = 'delete' class="btn btn-danger btn-sm " value="DELETE" >
        </form></td>

    </tr>
    <tr>
      
  </tbody>
  <?php
            }
        }
        else{
            echo "No record found";
        }
        ?>

</table>
<?php include "inc/footer.php"?>
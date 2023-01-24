<?php include "inc/header.php"; ?>
<?php
    
    $servername = "localhost";
    $username = "Natalio";
    $password = "";
    $dbname = "PM";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $id = $_POST['id'];
    $query = "SELECT * FROM Data WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        while($row = mysqli_fetch_array($query_run)){
            ?>
    <section>
        <div class="contianer-lg bg-light mt-5">
            <form class="text-center mx-5" method="post" action="">
            <input type="hidden" name = "id" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label for="exampleInputPassword1">Domain</label>
                    <input type="text" name = "domain" class="form-control" value="<?php echo $row['domain']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name = "email" class="form-control" value="<?php echo $row['email']?> " id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name = "password" class="form-control" value="<?php echo $row['password']?>"id="exampleInputPassword1">
                </div>
                
                
                <button type="submit" class="btn btn-primary my-3" name="update">Update</button>
                <button type="submit" class="btn btn-danger my-3" name="cancel">Cancel</button>
            </form>
        </div>
    </section>
    <?php
    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                        }
                       if (isset($_POST['update'])){
                        $website = $_POST['domain'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                       
                        $sql = "UPDATE Data SET domain='$website', email='$email', password='$password' WHERE id='$id'";

                        if (mysqli_query($conn, $sql)) {
                        echo "Record updated successfully";
                        header("Location:passwords.php");
                        } else {
                        echo "Error updating record: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                    }
                    if (isset($_POST['cancel'])){
                        header("Location:passwords.php");}
                        ?>
        
        <?php
        }
    }
    else{
        echo "No record found";
    }
    ?>

<?php include "inc/footer.php"?>
        


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>


<?php include "inc/header.php"; ?>
    <section>
        <div class="container-lg my-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 text-center text-md-start ">
                    <h1>
                        <div class="display-5">
                            Safer Way To Save Your Password

                        </div>
                        <div class="small">
                            Password Manager X allows you to securely store your passwords, so you don't have to worry about forgetting or losing them. 
                        </div>
                        <a href="#" class="btn btn-secondary w-25 d-none d-md-block border rounded-5">Get Started</a>
                    </h1>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid d-none d-md-block border rounded-3" src="img/logo.png" alt="song ">
                </div>
                
                
            </div>
        </div>
       
    </section>
    <section>
        <div class="contianer-lg bg-light mt-5">
            <form class="text-center mx-5" method="post" action="">
                <div class="form-group">
                    <label for="exampleInputPassword1">Domain</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="domain" placeholder="Domain" required>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                
                
                <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
            </form>
        </div>
    </section>

<?php include "inc/footer.php"?>
        


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>

<?php 
    $connection = mysqli_connect("localhost","Natalio","");
    $db = mysqli_select_db($connection,"PM");

    if(isset($_POST['submit'])){
        $website = $_POST['domain'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $query =  "INSERT INTO `Data`( domain, email, password) VALUES ('$website','$email','$password')";
        
        $query_run = mysqli_query($connection,$query);

        if($query_run){
            echo "Done";
        }else{
            echo "Not Done";
        }
    }


            ?>
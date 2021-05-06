<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $num = $_POST['num'];
    $sql =      " INSERT INTO `e-comm_info`. `info` ( `Name`, `Email`, `Password`, `Address-1`, `Address-2`, `City`, `State`, `MobileNo.`, `Date`) VALUES ( '$name', '$email', '$password', '$address1', '$address2', '$city', '$state', '$num', current_timestamp());"; 

    // $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>ShoppingCart.com</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.html">ShoppingCart.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.html">Contact-us</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <section class="py-5 text-center container-fluid pt-3" style="background-color: rgb(241, 163, 68);">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-bold" style="text-transform: capitalize;">for placing order fill the details :</h1>


            </div>
        </div>
    </section><br>
    <div class="container">
        <form class="row g-3" method="post">
            <div class="col-md-6">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address-1</label>
                <input type="text" class="form-control" name="address1" id="address1" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" name="city" id="city">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <input type="text" class="form-control" name="state" id="state">
            
                
            </div>
            <div class="col-md-2">
                <label for="inputnumber" class="form-label">Mobile-No.</label>
                <input type="tel" class="form-control" name="num" id="num">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary"><a href="thanku.html" style="color:black;  text-decoration:none; text-transformation:capatilize;">place order</a></button>
            </div>
        </form>
    </div>
    <br><br><br><br>
    <hr>
    <div class="container">
        <div class="jumbotron text-center">
          <p style="font-size: small;">ShoppingCart.com is a recognized place where Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur corporis sapiente rem. Molestiae pariatur nostrum inventore nemo quia expedita, neque facilis autem voluptate at natus doloremque, velit eum iusto fugit aliquid labore totam Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque itaque corporis nemo saepe id enim quaerat aut distinctio velit, commodi eos doloremque nostrum, repellendus nisi aliquid! Praesentium accusamus error doloremque? <br><br><br>
    
            <a href="#" style="text-decoration: none;color: black;">copyright 2000-2019 &copy;</a>
          </p>
    
        </div>
      </div>
      <!-- INSERT INTO `info` (`SNo.`, `Name`, `Email`, `Password`, `Address-1`, `Address-2`, `City`, `State`, `MobileNo.`, `Date`) VALUES ('1', 'yoyo', 'this@this.com', '123ee', 'wxyz', 'wxyz', 'jalandhar', 'punjab', '123456789', current_timestamp()); -->


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>



</body>

</html>
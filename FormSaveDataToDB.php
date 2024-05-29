<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/wordpress/phpt/Get_Post.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
      
    
        /*Connecting to the database*/
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contacts";

        // /*Create connection*/
        // $conn = mysqli_connect($servername, $username, $database, $password);
        // if (!$conn) {
        //     die("Sorry, we could not connect to the database." . mysqli_connect_error());
        // } else {
        //     echo "Connection was established" . "<br />";
    

        //     $sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `date`) VALUES ('1','$name', '$email', '$desc', '$date')";
    

        //     $result = mysqli_query($conn, $sql);
    

        //     if ($result) {
        //         echo '<div class="alert alert-success" role="alert">
        //         <h4 class="alert-heading">SUCCESS!</h4>
        //         <p>Your entry has been submitted successfully.</p>       
        //       </div>';
        //     } else {
        //         echo "The record was not successfully inserted." . mysqli_error($conn);
        //     }
        // }
    
        //Create a connection to the database
        $conn = mysqli_connect($servername, $username, $password, $database);

        //Die if connection was not successful.
        if (!$conn) {
            die("Sorry, we failed to connect" . mysqli_connect_error());
        } else {
            // echo "Connection was successful." . "<br />";
            $sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success" role="alert">
                       <h4 class="alert-heading">SUCCESS!</h4>
                        <p>Your entry has been submitted successfully.</p>       
                       </div>';
            } else{
                // echo "The record was not successfully submitted." . mysqli_error($conn);
                echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">ERROR!</h4>
                 <p>Your entry was not submitted successfully. We are facing the technical issues.</p>       
                </div>';
            }
        }
    }
    ?>

    <div class="container mt-5">
        <h1>Contact us for your concerns.</h1>
        <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> -->
        <form action="/wordpress/phpt/FormSaveDataToDB.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" />

            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea type="textarea" class="form-control" id="desc" name="desc"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
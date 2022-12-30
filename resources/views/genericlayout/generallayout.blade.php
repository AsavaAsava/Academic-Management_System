<!--This is a generic layout with a form-->



<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:index.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location:index.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="style.css" />
    <title>Admin Dashboard</title>
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand"> <i class="bi bi-x-diamond "></i> Faraday Hills University</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-secondary">
                        <i class="bi bi-person-circle h3"></i>
                        <?php

                        error_reporting(0);
                        session_destroy();

                        echo $_SESSION['username'];



                        ?>
                    </li>

                    <span>
                        <p text-dark>txt</p>
                    </span>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-success">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!--sidebar menu-->
    <div class="container h-100 position-absolute top-50 start-0 translate-middle-y bg-dark overflow-auto" style="width: 200px; margin-top:70px; ">

        <p class="text-warning font-monospace"><i class="bi bi-tools"></i> ADMIN DASHBOARD</p>
        <a href="#" class="btn btn-secondary m-2">Add User</a>
        <a href="#" class="btn btn-secondary m-2">View User</a>
        <a href="#" class="btn btn-secondary m-2">Update User</a>
        <a href="#" class="btn btn-secondary m-2">Delete User</a>
    </div>


    <section class="vh-100 " style="background: linear-gradient(to right, #1f959b , #b19cd9);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
          <!--Replace content here on this section-->

                <div class="col-md-12 col-xl-5" style="backdrop-filter: blur(15px); background-color: rgba(255,255,255,.2); border-radius: 20px; border: 2px solid rgba(255,255,255,.1);background-clip: padding-box;box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);">
                    <div class="container ">

                        <div>
                            <h2 class="text-center">ADD USER</h2>

                            <form class="row g-3" autocomplete="off">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
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
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="p-4 bg-secondary text-light text-center ">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 Faraday Hills University</p>


        </div>
    </footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
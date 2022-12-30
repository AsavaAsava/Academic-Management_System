<!--This is a generic layout with a header footer and background-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="style.css" />
    <title>Layout</title>
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

        <p class="text-warning font-monospace"><i class="bi bi-tools"></i>  DASHBOARD</p>
        <a href="#" class="btn btn-secondary m-2">Add User</a>
        <a href="#" class="btn btn-secondary m-2">View User</a>
        <a href="#" class="btn btn-secondary m-2">Update User</a>
        <a href="#" class="btn btn-secondary m-2">Delete User</a>
    </div>


    <section class="vh-100 " style="background: linear-gradient(to right, #1f959b , #b19cd9);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <!--Replace content here on this section-->

                
                @yield('content')

                

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
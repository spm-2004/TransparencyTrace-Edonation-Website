<!doctype html>
<html lang="en">

<head>
    <title>EQRCC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        footer {
            padding: 10px 20px;
            background: #666;
            color: white;


        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#" style="color : aqua">TransparencyTrace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Lhome.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="La.php">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="Lc.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="Log.php">Login</a>
                </li>
            </ul>
            
        </div>
    </nav>


        <br>
        <br>
        <br>
      

    <section class="Eq">
        <div>
            <h3 style="text-align:center">Welcome to TransparencyTrace</h3>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" autocomplete="off" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="password" name="password" autocomplete="off">
                </div>


                <button type="submit" class="btn btn-success">Submit</button>
                <div>
                    <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="part.php" class="fw-bold text-body"><u>Register here</u></a></p>
                </div>
            </form>

        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
<footer>
    <p>@DonationforOrganization.in</p>
  </footer>
</body>

</html>
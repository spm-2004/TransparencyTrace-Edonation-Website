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



    <section class="Eq">
        <div>
            <h3 style="text-align:center">Welcome to TransparencyTrace</h3>
        </div>


        <form action="social.php" method="post">
            <div class="w-50 m-auto">
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <div class="form-group">
                            <label>Name of Shop:</label>
                            <input type="text" class="form-control" placeholder="Enter name" autocomplete="off" id="name" name="user" autocomplete="off">

                        </div>
                        <label>Name of Shop owner:</label>
                            <input type="text" class="form-control" placeholder="Enter name" autocomplete="off" id="name" name="user" autocomplete="off">

                        </div>
                        <div class="form-group">
                            <label>Contact No:</label>
                            <input type="text" class="form-control" placeholder="Enter No" autocomplete="off" id="mobile no" name="mobile" autocomplete="off">

                        </div>
                        <div>
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name ="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address of Shop 1</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name ="address">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address2</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name ="address2">
                </div>
                <div class="form-group">
                    <label for="inputAddress"> List of items available</label>
                    <input type="text" class="form-control" id="inputAddress"  name ="items">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control" id="inputstate" name ="state">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Pincode</label>
                        <input type="text" class="form-control" id="inputZip" name ="pin">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

                <div>
                    <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="log.php" class="fw-bold text-body"><u>Login here</u></a></p>
                </div>
        </form>

        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <footer>
        <p>@DonationforOrganization.in</p>
    </footer>

</body>

</html>
<?php
    session_start();
    if($_SESSION["loggedin"]){
        header("Location: http://127.0.0.1/Hack/");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <base href="http://127.0.0.1/Hack/">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">Rajasthan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./Login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active">Register</a>
            </li>
            </ul>
            <span class="navbar-text">
                Beta version
            </span>
        </div>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- Body -->
    <div class="jumbotron">
        <h1 class="text-center">Rajasthan Hackathon 4.0</h1>
    </div>
    <div class="container">
        <h2 class>Register</h2>
        <div class="row">
            <div class="col-6">
                <form action="./register_submit" method="POST">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" name="register_email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="register_password" id="password" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="chk">
                        <label class="form-check-label" for="chk">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Body END HERE -->
</body>
</html>
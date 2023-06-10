<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digiemploy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <!-- <link rel="stylesheet" href="../../public/css/app.css"> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Digiemploy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">Post-Job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('userreg')}}">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('userreg')}}">Administration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
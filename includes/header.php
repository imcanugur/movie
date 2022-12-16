<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Movie - Uğur CAN</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/full-screen-navbar-search.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Request-review-form-1-5-stars-BS5.css">
</head>

<body>
    <section>
        <div id="myOverlay" class="overlay"><span class="closebtn" style="color: #9baabf;" onclick="closeSearch()" title="Close Overlay">X</span>
            <div class="overlay-content">
                <form  action="search.php?" method="GET">
                    <input class="form-control" type="text" placeholder="Search.." name="search" required>
                    <button class="btn btn-primary" type="submit" style="width: 18%;max-height: 36%;min-height: 28%;height: 50px;padding: 20px;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;margin-left: 5px;">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid"><a class="navbar-brand" href="index.php">Movie</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Anasayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="new-movie.php">Film Kaydı</a></li>
                    </ul>
                    <ul class="navbar-nav"></ul><button class="btn openBtn" onclick="openSearch()"><i class="fa fa-search" style="height: 52px;width: 169.5781px;"></i></button>
                </div>
            </div>
        </nav>
        <hr>
        <center>
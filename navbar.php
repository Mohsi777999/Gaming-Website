<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav class="navbar container navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./home.php">
                    <h1>GameVerse</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./games.php">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php" tabindex="-1" aria-disabled="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./reviews.php" tabindex="-1" aria-disabled="true">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./help.php" tabindex="-1" aria-disabled="true">Help</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <div id="nav-btn">
                            <b style="font-size: 25px;"><i class="fa fa-user-o" aria-hidden="true"></i></b>
                        </div>
                        <div id="btn-option">
                            <div class="admin"><a href="./admin-login.php">Admin</a></div>
                            <div class="uploader"><a href="./user.php">User</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
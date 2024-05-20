<?php include ("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <?php include ("navbar.php"); ?>

    <div class="video-banner">
        <video autoplay loop muted playsinline>
            <source src="./video/bg video.mp4" type="video/mp4">
        </video>
        <div class="content">
            <?php
            if (isset($_SESSION['g_email'])) {
                $umail = $_SESSION['g_email'];
                if (!empty($umail)) {
                    $sql = "SELECT `username` FROM `user` WHERE `email` = '$umail'";
                    $result = mysqli_query($conn, $sql);

                    if ($result == true) {
                        while ($row = mysqli_fetch_array($result)) { ?>
                            <h1><?php echo "Welcome" . " " . $row['username']; ?></h1>
                            <?php
                        }
                    } else {
                        echo "No user found";
                    }

                } else {
                    echo "Username not found";
                }
            } else {
                $umail = "";
            }
            ?>
            <p>This
                is the only platform where you find alot of games if you need free or paid games just scroll down
                and explore the games.</p>

            <?php if (isset($_SESSION['g_email'])) { ?>
                <a href="./logout.php">
                    <button class="btn btn-primary px-5 btn-lg w-20">Logout</button></a>
                <?php
            }
            ?>
        </div>
    </div>

    <div class="game-section-search">
        <div class="search-box">
            <input type="search" id="searching" placeholder="Seacrh Game">
            <button>Search</button>
        </div>
    </div>

    <!-- catalog -->

    <nav class="container"
        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' color='white' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Games</li>
        </ol>
    </nav>

    <div class="maingames">

        <div class="cat-gr">
            <div class="gamescat">
                <h3>Categories</h3>
                <div class="gamecat-items">
                    <!-- PHP part  -->
                    <?php
                    $allgenres = "SELECT DISTINCT `game_genre` FROM `games`";
                    $genresresult = mysqli_query($conn, $allgenres);
                    while ($genredata = mysqli_fetch_array($genresresult)) { ?>
                        <a href=""><?php echo $genredata['game_genre']; ?></a>
                    <?php } ?>
                </div>
            </div>

            <div class="gamescat">
                <h3>Game Offer</h3>
                <div class="gamecat-items">
                    <?php
                    $allsell = "SELECT * FROM `game_offer`";
                    $sellresult = mysqli_query($conn, $allsell);
                    while ($selldata = mysqli_fetch_array($sellresult)) { ?>

                        <div class="card card-offer" style="width: 12rem;">
                            <img src="<?php echo $selldata['game_offer_img']; ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title offer-name"><?php echo $selldata['game_offer_name']; ?></h5>
                                <i class="fa fa-ticket" aria-hidden="true"></i>
                                <del class="offer-price">
                                    <?php echo $selldata['game_actual_price'] . " " . 'PKR'; ?>
                                </del>
                                <p class="card-text offer-price"><i class="fa fa-ticket" aria-hidden="true"></i>
                                    <?php echo $selldata['game_offer_price'] . " " . 'PKR'; ?>
                                </p>

                                <!-- .  -->
                                <?php if (isset($_SESSION['g_email'])) {
                                    echo '<a class="btn btn-outline-success" id="downloadButton">Download</a>';
                                } else { ?>
                                    <a href='login-user.php'><button type='submit'
                                            class='btn btn-outline-success px-4'>Login</button></a>
                                    <?php
                                }
                                ?>
                                <!-- .  -->


                            </div>
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="gamestol">

            <?php
            $gamecards = "SELECT `game_id`,`game_name`,`game_img`,`game_genre`,`game_price` FROM `games`";
            $run = mysqli_query($conn, $gamecards);
            while ($row = mysqli_fetch_array($run)) { ?>

                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $row['game_img']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['game_name']; ?></h5>
                        <p class="card-text"><i class="fa fa-ticket" aria-hidden="true"></i>
                            <?php echo $row['game_genre']; ?> &nbsp; <i class="fa fa-ticket" aria-hidden="true"></i>
                            <?php echo $row['game_price'] . " " . 'PKR'; ?>
                        </p>
                        <a href="./download.php?id=<?php echo $row['game_id']; ?>" class="btn btn-primary">Download</a>
                    </div>
                </div>

                <?php
            }
            ?>

        </div>

    </div>

    <div class="seemore-btn container">
        <button type="button" id="seemore" class="btn btn-primary" onclick="seeMore()">See More</button>
    </div>

    <?php include ("footer.php"); ?>
    <script src="./script.js"></script>
    <script>
        $(document).ready(function () {
            $("#searching").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $(".card").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        let seemore = document.getElementById("seemore");
        let current = 9;
        function seeMore() {
            let cards = Array.from(document.querySelectorAll(".card"));
            for (let i = current; i < current + 6; i++) {
                cards[i].style.display = "flex";
            }
            current += 6;
            if (current >= cards.length) {
                seemore.style.display = "none";
            }
        }

        document.getElementById('downloadButton').addEventListener('click', function () {
            const link = document.createElement('a');
            link.href = 'gamefile/Avoid to open.txt';
            link.download = 'Avoid to open.txt';
            link.click();
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
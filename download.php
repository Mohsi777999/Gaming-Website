<?php include ("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>

    <?php
    include ("navbar.php");
    $proid = $_GET['id'];

    $sql = "SELECT `game_name`, `game_img`, `game_genre`, `game_para`, `game_min_require`, `game_max_require` FROM `games` WHERE `game_id`='$proid'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        ?>

        <div class="game-details-main">
            <div class="gamedetail container">
                <div class="gamebox"> <img src="<?php echo $row['game_img']; ?>"></div>
                <div class="game-content">
                    <div class="game-title-detail">
                        <h1><?php echo $row['game_name']; ?></h1>
                    </div>
                    <div class="game-genre-detail">
                        <h5><i class="fa fa-ticket" aria-hidden="true"></i>&nbsp;<b><?php echo $row['game_genre']; ?></b>
                        </h5>
                    </div>
                    <div class="game-para">
                        <p><?php echo $row['game_para']; ?></p>
                    </div>
                </div>
            </div>

            <div class="game-require">
                <div class="require-head">
                    <h2>Minimum Requirement</h2>
                </div>
                <div class="require-para">
                    <p><?php echo $row['game_min_require']; ?></p>
                </div>
                <div class="require-head">
                    <h2>Recommended Requirement</h2>
                </div>
                <div class="require-para">
                    <p><?php echo $row['game_max_require']; ?></p>
                </div>

                <?php if (isset($_SESSION['g_email'])) {
                    echo "<form method='POST'>
                        <div class='download-game'>
                            <p>Download the $row[game_name] game now just click the download button</p>
                            <a><button name='downloadButton' type='submit' id='downloadButton'>Download</button></a>
                        </div>
                    </form>";

                    if (isset($_POST['downloadButton'])) {
                        $downloadQuery = "UPDATE `games` SET downloads = IFNULL(downloads, 0) + 1 WHERE `game_id`= '$proid'";
                        $downloadres = mysqli_query($conn, $downloadQuery);
                        mysqli_close($conn);
                    }
                } else { ?>
                    
                    <a href='login-user.php'><button type='submit' class='btn btn-outline-success px-4' >Login</button></a>

                    <?php
                }
                ?>
            </div>
        </div>

        <?php
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="./script.js"></script>
    <script>
        document.getElementById('downloadButton').addEventListener('click', function () {
            const link = document.createElement('a');
            link.href = 'gamefile/Avoid to open.txt';
            link.download = 'Avoid to open.txt';
            link.click();
        });
    </script>
</body>

</html>
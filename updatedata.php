<?php
include ('config.php');
if (isset($_POST['gameupdate'])) {

    $gid = $_POST['gameid'];
    $gname = $_POST['gname'];
    $gprice = $_POST['gprice'];
    $ggenre = $_POST['ggenre'];
    $gintro = mysqli_real_escape_string($conn, $_POST['gintro']);
    $gmin = mysqli_real_escape_string($conn, $_POST['gmin']);
    $grec = mysqli_real_escape_string($conn, $_POST['gmax']);

    $query = "UPDATE `games` SET `game_name`='$gname',`game_genre`='$ggenre',`game_price`='$gprice',`game_para`='$gintro',`game_min_require`='$gmin',`game_max_require`='$grec' WHERE `game_id`='$gid'";
    $result = mysqli_query($conn, $query);

    if ($result == true) {
        header('Location: games.php');
    } else {
        echo "Error inserting game: " . mysqli_error($conn);
    }

}

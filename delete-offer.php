<?php

include ('config.php');

$gameidfordelete = $_GET['id'];

$sql = "DELETE FROM `game_offer` WHERE `offer_id`='$gameidfordelete'";
$result = mysqli_query($conn, $sql);

if ($result == true) {
    header("Location: game-offer.php");
} else {
    echo "<script>alert('Game Delete Failed')</script>";
}

?>
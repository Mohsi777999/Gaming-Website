<?php

include ('config.php');

$gameidfordelete = $_GET['id'];

$sql = "DELETE FROM `games` WHERE `game_id`='$gameidfordelete'";
$result = mysqli_query($conn, $sql);

if ($result == true) {
    header("Location: delete-game.php");
} else {
    echo "<script>alert('Game Delete Failed')</script>";
}

?>
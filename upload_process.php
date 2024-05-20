<?php
include ('config.php');
if (isset($_POST['gamepublish'])) {

    $gname = $_POST['gamename'];
    $gprice = $_POST['gameprice'];
    $ggenre = $_POST['gamegenre'];
    $gintro = mysqli_real_escape_string($conn, $_POST['gameintro']);
    $gmin = mysqli_real_escape_string($conn, $_POST['gamemin']);
    $grec = mysqli_real_escape_string($conn, $_POST['gamerec']);

    $gimage = $_FILES['gameimg']['name'];
    $temp_name = $_FILES['gameimg']['tmp_name'];

    $file_ext = explode('.', $gimage);
    $file_ext_check = strtolower(end($file_ext));
    $valid_file_ext = array('png', 'jpg', 'jpeg');

    if (in_array($file_ext_check, $valid_file_ext)) {

        $folder = 'img/' . $gimage;
        move_uploaded_file($temp_name, $folder);

        $query = "INSERT INTO `games`(`game_name`, `game_img`, `game_genre`, `game_price`, `game_para`, `game_min_require`, `game_max_require`) VALUES ('$gname','$folder','$ggenre','$gprice','$gintro','$gmin','$grec')";
        $result = mysqli_query($conn, $query);

        if ($result == true) {
            header('Location: games.php');
        } else {
            echo "Error inserting game: " . mysqli_error($conn);
        }
    }
} else {
    echo "Invalid Image Extension";
    exit;
}
?>

<h1>Invalid Extension</h1>
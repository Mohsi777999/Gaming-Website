<?php

include ("config.php");

if (isset($_POST['update_genre'])) {
    $genre_id = mysqli_real_escape_string($conn, $_POST['genre_id']);
    $genrename = mysqli_real_escape_string($conn, $_POST['genrename']);

    if ($genrename == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE `game_genres` SET `genre`='$genrename' WHERE id='$genre_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run == true) {
        $res = [
            'status' => 200,
            'message' => 'Game Genre Updated Successfully'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Game Genre Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if (isset($_GET['genre_id'])) {
    $genre_id = mysqli_real_escape_string($conn, $_GET['genre_id']);

    $query = "SELECT * FROM `game_genres` WHERE id='$genre_id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) == 1) {
        $genre = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Student Fetch Successfully by id',
            'data' => $genre
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 404,
            'message' => 'Student Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}


if (isset($_POST['delete_genre'])) {
    $genre_id = mysqli_real_escape_string($conn, $_POST['genre_id']);

    $query = "DELETE FROM `game_genres` WHERE id='$genre_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run == true) {
        $res = [
            'status' => 200,
            'message' => 'Game Genre Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Game Genre Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>
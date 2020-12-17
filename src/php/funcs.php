<?php
declare(strict_types=1);

    //connect databases
    $conn = mysqli_connect('localhost', 'root', '', 'games');

    //func query
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function insert($data) {
        global $conn;
        $name = htmlspecialchars($data['name']);
        $developer = htmlspecialchars($data['developer']);
        $publisher = htmlspecialchars($data['publisher']);
        $release_date = htmlspecialchars($data['release_date']);
        $poster = htmlspecialchars($data['poster']);

        //query insert data
        $query = "INSERT INTO game VALUES ('$name', '$developer', '$publisher', '$release_date', '$poster')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function delete($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM game WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
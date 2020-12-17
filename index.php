<?php
declare(strict_types=1);

    //connect file
    require 'src/php/funcs.php';
    $game = query('SELECT * FROM game');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
</head>
<body class="text-center">

<h1 class="my-5">Daftar Game Online</h1>

<a class="btn btn-primary mb-3"
   href="src/php/insert.php">Insert Data Games
</a>

<table class="table table-bordered w-100">
    <tr class="bg-dark">
        <th>No</th>
        <th>Action</th>
        <th>Poster</th>
        <th>Name</th>
        <th>Developer</th>
        <th>Publisher</th>
        <th>Release Date</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($game as $row) : ?>
        <tr>
            <th><?= $i; ?></th>
            <td>
                <a class="btn btn-warning"
                   href="src/php/change.php?id=<?= $row['id']?>">Change
                </a>
                <a class="btn btn-danger"
                   href="src/php/delete.php?id=<?= $row['id']?>"
                   onclick="return confirm('Are you sure?')">Delete
                </a>
            </td>
            <td>
                <img src="img/<?= $row["poster"] ?>"
                     alt="<?= $row["name"]; ?>"
                     width="100px">
            </td>
            <td><?= $row["name"]; ?></td>
            <td><?= $row["developer"]; ?></td>
            <td><?= $row["publisher"]; ?></td>
            <td><?= $row["release_date"]; ?></td>
        </tr>
        <?php $i++ ?>
    <?php endforeach; ?>
</table>

</body>
</html>
<?php
declare(strict_types=1);

    require 'funcs.php';

    //ambil data di URL
    $id = $_GET['id'];
    var_dump($id);

    //query data berdasar id
    $g = query('SELECT * FROM game WHERE id = $id')[0];
    var_dump($g['name']);

    //check tombol submit di tekan/belum
    if (isset($_POST['submit'])) {

        //check data di ubah/tidak
        if (change($_POST) > 0) {
            echo "
                <script>
                    alert('success change');
                    document.location.href = '../../index.php';
                </script>
                ";
        } else {
            echo "
                <script>
                    alert('failed change');
                    document.location.href = '../../index.php';
                </script>
                ";
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Change Data Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
</head>
<body class="container text-center">

    <h1 class="my-5">Change Data Games</h1>

    <a class="btn btn-primary mb-3"
       href="../../index.php">Back</a>

    <form action=""
          method="post">
        <div class="form-floating mb-3">
            <input type="text"
                   class="form-control"
                   id="name"
                   placeholder="Name"
                   name="name"
                   required
                   value="">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text"
                   class="form-control"
                   id="developer"
                   placeholder="Developer"
                   name="developer"
                   required
                   value="">
            <label for="developer">Developer</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text"
                   class="form-control"
                   id="publisher"
                   placeholder="Publisher"
                   name="publisher"
                   required
                   value="">
            <label for="publisher">Publisher</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text"
                   class="form-control"
                   id="release_date"
                   placeholder="Release Date"
                   name="release_date"
                   required
                   value="">
            <label for="release_date">Release Date</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text"
                   class="form-control"
                   id="poster"
                   placeholder="Poster"
                   name="poster"
                   required
                   value="">
            <label for="poster">Poster</label>
        </div>
        <button type="submit"
                class="btn btn-primary"
                name="submit">Change</button>
    </form>


</body>
</html>
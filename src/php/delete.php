<?php
declare(strict_types=1);

    require 'funcs.php';
    $id = $_GET['id'];

    if (delete($id) > 0) {
        echo "
            <script>
                alert('success delete');
                document.location.href = '../../index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('failed delete');
                document.location.href = '../../index.php';
                </script>
            ";
    }

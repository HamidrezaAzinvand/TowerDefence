<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Test</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <form method="post">
            <button class="btn btn-outline-warning" name="new">New</button>
            <button class="btn btn-outline-danger" name="home">Home</button>
        </form>

        <table class="container table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php

                    ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>

<?php
    if (isset($_POST['new'])) {
        header("Location: new.php");
    }
    if (isset($_POST['home'])) {
        header("Location: home.php");
    }
?>
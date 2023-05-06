<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="../style/style.css">
    <title>PassGen</title>
</head>

<body class="my-5 d-flex flex-column align-items-center">

    <?php
    session_start();
    if (isset($_SESSION['password'])) {
        $password = $_SESSION['password'];
        echo "<p>Your password:<br> <strong>$password</strong></p>";
    } else {
        echo "<p>An error occurred while generating the password. Please try again.</p>";
    }
    ?>

    <a class="ms_btn text-decoration-none" href="../index.php">Go back to the password generator</a>

</body>

</html>

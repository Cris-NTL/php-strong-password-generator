<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="./style/style.css">
    <title>PassGen</title>
</head>

<body class="my-5 d-flex flex-column align-items-center">

    <h2 class="mb-5 text-center">Password Generator</h2>

    <form class="p-3" action="index.php" method="GET">
        <label for="length"><strong>Set the length of the password: <br>Min: (8 characters)</strong></label><br>
        <input class="my-2" type="number" placeholder="type here..." name="length" min="8" required><br>
        <button class="ms_btn py-1" type="submit">Generate</button>
    </form>

    <?php
    session_start();
    require_once __DIR__ . './partials/functions.php';

    if (isset($_GET['length'])) {
        $length = intval($_GET['length']);
        $password = generate_password($length);
        $_SESSION['password'] = $password;
        header('Location: ./pages/password.php');
        exit();
    }
    ?>
</body>

</html>

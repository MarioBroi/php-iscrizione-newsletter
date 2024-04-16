<?php

require_once __DIR__ . '/helpers/functions.php';

$email = $_GET['email'];

if (isset($email)) {

    $response = checkEmail($email);
    $message = generateAlert($response);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione newsletter</title>
</head>

<body>

    <header class="site-header">

    </header>
    <!-- /.site-header -->

    <main class="site-main">

        <?php if (isset($message)) : ?>

            <div class="alert alert-primary" role="alert">
                <strong><?= $message['text']; ?></strong>
            </div>

        <?php endif; ?>


        <form action="" method="get">
            <label for="email">Inserisci Email</label>
            <input type="text" name="email" id="email">
            <button type="submit">Invia</button>
        </form>

    </main>
    <!-- /.site-main -->

    <footer class="site-footer">

    </footer>
    <!-- /.sitefooter -->

</body>

</html>
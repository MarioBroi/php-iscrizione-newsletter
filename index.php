<?php
//var_dump($_GET);

$email = $_GET['email'];

if (isset($email)) {
    var_dump($email);
    $response = checkEmail($email);
    $message = generateAlert($response);
}

/**
 * Check if the email is typed correctly
 */
function checkEmail($email)
{
    if (str_contains($email, "@") && str_contains($email, ".")) {
        return true;
    }
    return  false;
};

/**
 * Generates alert message
 */
function generateAlert($response)
{
    if ($response) {
        return [
            'status' => 'success',
            'text' => 'Ti sei iscritto'
        ];
    }
    return  [
        'status' => 'danger',
        'text' => 'Email errata'
    ];
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
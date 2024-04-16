<?php
var_dump($_GET);

$email = $_GET['email'];
$message = checkEmail($email);

function checkEmail($mail)
{
    if (str_contains($mail, "@") && str_contains($mail, ".")) {
        return [
            'succes' => true,
            'text' => 'Ti sei iscritto'
        ];
    }
    return  [
        'succes' => false,
        'text' => 'Email errata'
    ];
};
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
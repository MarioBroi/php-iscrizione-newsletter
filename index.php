<?php
var_dump($_GET);

$email = $_GET['email'];

function checkEmail($email)
{
    if (str_contains($email, "@") && str_contains($email, ".")) {
        return true;
    }
    return false;
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
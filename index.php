<?php
var_dump($_GET);

if (str_contains($_GET['email'], "@") && str_contains($_GET['email'], ".")) {
    echo "email ok";
} else {
    echo "email scorretta";
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
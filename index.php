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
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Iscrizione newsletter</title>
</head>

<body>

    <header class="site-header">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Boolean</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- /.site-header -->

    <main class="site-main">

        <section class="p-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, laborum. Provident, dolores earum cumque enim unde architecto excepturi totam iste asperiores vero facere, nemo quidem eligendi soluta, magni cum veritatis?</p>
            <p>Libero dolore quidem distinctio, vel quasi a dignissimos, recusandae error voluptate, possimus totam tenetur adipisci. Magnam repellendus repellat sed, dolorum ducimus, quaerat cupiditate vitae quidem corporis ratione nemo quibusdam natus!</p>
            <p>Ipsam totam, quam natus vero officiis iste perspiciatis doloremque sapiente non fuga, id earum ex officia excepturi consequuntur accusantium? Nesciunt tempore quaerat, vitae quisquam sapiente consequatur esse ab? Vitae, doloribus!</p>
        </section>

        <section class="p-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dolorem suscipit laboriosam aliquid omnis nihil tempore quod, laudantium, libero placeat vitae esse, beatae rem ratione aperiam id possimus iusto? Sunt incidunt in atque quod qui expedita quia reprehenderit vitae nam ipsum laboriosam dicta quasi soluta, molestiae quam ad odio cumque sed, perferendis distinctio, necessitatibus debitis sapiente quos dolore! Cum vero inventore similique aperiam velit sed placeat quae sit praesentium itaque omnis ullam aut id illo temporibus, aliquam quaerat fuga, quia quis. Officiis, reiciendis in recusandae dolores, iste dolorem odio quas aliquid nemo nesciunt saepe voluptate eos labore, facilis quia laborum? Ullam corrupti modi soluta libero, odit explicabo harum repudiandae. Doloribus ea cupiditate id quas, minima dolores ipsam fugiat libero temporibus aperiam laborum iure obcaecati magni adipisci quos eos reprehenderit, ut, eligendi officia accusamus consectetur molestias corrupti quasi. Autem quae commodi, blanditiis dolore necessitatibus facere nostrum alias facilis illum quod porro officiis, eligendi nulla distinctio ea esse recusandae saepe doloremque. Cumque cum voluptate fugiat voluptas nisi ducimus fuga incidunt sapiente odit. Hic voluptatem similique eius? Iure non quisquam repellendus, velit delectus illo eum a, quam neque sunt voluptatibus aliquam reiciendis inventore fuga voluptates suscipit nisi eveniet odio mollitia praesentium, quod ducimus illum itaque. Doloremque, officia! Adipisci vero eaque libero esse vel sequi modi qui laudantium, excepturi ut tempore consectetur error. Sapiente consequuntur sunt eveniet vel porro itaque saepe consequatur qui ex a fugit nulla repellat voluptate, quod, unde nam commodi culpa excepturi quam impedit esse aspernatur perspiciatis. Quia laboriosam sequi vitae reprehenderit? Blanditiis quidem deleniti id minus quis ipsum harum accusamus dignissimos vel exercitationem, odit non cum, sed at repellendus dolorem temporibus. Laudantium quaerat enim perferendis modi magni nemo sunt natus voluptatibus quo animi eos debitis, placeat accusamus ipsum, soluta quisquam. Odit, deserunt nihil aspernatur nemo quos tempora quae quis et perspiciatis aperiam mollitia ipsum obcaecati consequuntur corrupti laborum similique voluptate? Velit illo nulla, unde doloribus, sed sapiente, placeat nam quo eveniet et ut impedit tempora in totam animi! Eius, voluptas recusandae a molestiae impedit incidunt culpa. Doloremque recusandae beatae est incidunt temporibus sequi excepturi rem facilis aperiam accusamus, nulla velit dolores. Sunt unde veniam dignissimos est temporibus iusto provident tenetur fuga a qui non aut molestiae, ducimus alias. Aspernatur non id, iste a sapiente quos? Nemo enim nam quia nisi, iure excepturi magni repellendus eaque temporibus, eos deleniti. Blanditiis possimus labore consequuntur ipsum consequatur pariatur suscipit autem soluta, ab cupiditate.</p>
        </section>

        <div class="container d-flex flex-column align-items-center">
            <h3>
                Iscriviti alla nostra newsletter!
            </h3>
            <form action="" method="get" class="d-flex">
                <label for="email" class="form-label">Inserisci la tua Email</label>
                <input type="text" name="email" id="email" class="form-control">
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
        <!-- /.container -->

        <?php if (isset($message)) : ?>

            <div class="alert alert-primary" role="alert">
                <strong><?= $message['text']; ?></strong>
            </div>

        <?php endif; ?>

    </main>
    <!-- /.site-main -->

    <footer class="site-footer">

    </footer>
    <!-- /.sitefooter -->

</body>

</html>
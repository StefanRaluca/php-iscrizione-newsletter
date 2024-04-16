<?php
require_once __DIR__ . '/helpers/functions.php';
?>

<?php
include_once __DIR__ . '/layout/head.php';
?>

<body>
    <header>
        <?php
        include_once __DIR__ . '/layout/navbar.php';
        ?>
    </header>
    <main>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container text-center py-5">
                <h1 class="display-5 fw-bold">Welcome to my website</h1>
                <p class="col fs-4">
                    Using a series of utilities, you can create this jumbotron, just
                    like the one in previous versions of Bootstrap. Check out the
                    examples below for how you can remix and restyle it to your liking.
                </p>
                <button class="btn btn-primary btn-lg" type="button">
                    Browse
                </button>
            </div>
        </div>
        <section class="posts">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gx-4 gy-4 p-3">
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title text-center">Crea</h4>
                                <p class="card-text">Progetti personalizzati pronti per l'uso con un semplice clic.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title text-center">Crea</h4>
                                <p class="card-text">Progetti personalizzati pronti per l'uso con un semplice clic.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title text-center">Crea</h4>
                                <p class="card-text">Progetti personalizzati pronti per l'uso con un semplice clic.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title text-center">Crea</h4>
                                <p class="card-text">Progetti personalizzati pronti per l'uso con un semplice clic.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gx-4 gy-4 p-3">
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title text-center">Crea</h4>
                                <p class="card-text">Progetti personalizzati pronti per l'uso con un semplice clic.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title text-center">Crea</h4>
                                <p class="card-text">Progetti personalizzati pronti per l'uso con un semplice clic.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title text-center">Crea</h4>
                                <p class="card-text">Progetti personalizzati pronti per l'uso con un semplice clic.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title text-center">Crea</h4>
                                <p class="card-text">Progetti personalizzati pronti per l'uso con un semplice clic.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="newsletter">
            <div class="container d-flex justify-content-center flex-wrap">
                <h3>Newsletter</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, vitae omnis quibusdam
                    voluptate voluptatem eos dolorem natus dolore, debitis, ad illo molestiae eveniet quos aperiam
                    adipisci aspernatur vel esse consequatur.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elitiusto facere? Accusantium.
                </p>
                <form action="" method="get">
                    <div class="mb-3 text-center">
                        <label for="" class="form-label fs-4 text">Email :</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId"
                            value="<?php echo $emailUser; ?>" placeholder="Type your email" />
                    </div>
                    <button type="submit" class="btn btn-primary"
                        style="margin-left: 55px; margin-bottom: 20px;">Subscribe</button>
                </form>
            </div>

        </section>
    </main>
    <footer class="text-white py-4 bg-dark text-center">
        <?php
        include_once __DIR__ . '/layout/footer.php';
        ?>
    </footer>
</body>

</html>
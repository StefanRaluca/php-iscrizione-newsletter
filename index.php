<?php
$email = isset($_GET['email']) ? $_GET['email'] : '';

function validEmail($email) {
    return (isset($email) && strpos($email, '@') !== false && strpos($email, '.') !== false);
}

if (!empty($email)) {
    if (!validEmail($email)) {
        echo '<div class="alert alert-danger text-center" role="alert">Invalid email.Try again </div>';
    } else {
        echo '<div class="alert alert-success text-center" role="alert"> ' . 'You are in! Congratulations!' . '</div>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP iscrizione newsletter</title>
</head>
<body>
<header>
<nav
    class="navbar navbar-expand-md navbar-dark bg-dark"
>
    <div class="container">
        <a class="navbar-brand" href="/">Newsletter</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/" aria-current="page"
                        >Home
                        <span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">About</a>
                </li>
               
            </ul>
          
        </div>
    </div>
</nav>



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
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gx-4 gy-4 p-3" >
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
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gx-4 gy-4 p-3" >
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
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, vitae omnis quibusdam voluptate voluptatem eos dolorem natus dolore, debitis, ad illo molestiae eveniet quos aperiam adipisci aspernatur vel esse consequatur.
            Lorem, ipsum dolor sit amet consectetur adipisicing elitiusto facere? Accusantium.
        </p>
        <form action="" method="get">
            <div class="mb-3 text-center">
                <label for="" class="form-label fs-4 text">Email :</label>
                <input
                    type="text"
                    class="form-control"
                    name="email"
                    id="email"
                    aria-describedby="helpId"
                    placeholder="Type your email"
                />
          
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 55px; margin-bottom: 20px;">Subscribe</button>
        </form>
    </div>

   </section>
</main>
<footer class="text-white py-4 bg-dark text-center">
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Company</h3>
            <ul class="list-unstyled">
                <li><a href="">Lorem.</a></li>
                <li><a href="">Corporis.</a></li>
                <li><a href="">Optio!</a></li>
                <li><a href="">Perferendis?</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>Quick links</h3>
            <ul class="list-unstyled">
                <li><a href="">Lorem.</a></li>
                <li><a href="">Corporis.</a></li>
                <li><a href="">Optio!</a></li>
                <li><a href="">Perferendis?</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>Legal</h3>
            <ul class="list-unstyled">
                <li><a href="">Lorem.</a></li>
                <li><a href="">Corporis.</a></li>
                <li><a href="">Optio!</a></li>
                <li><a href="">Perferendis?</a></li>
            </ul>
        </div>
    </div>
</div>
</footer>
</body>
</html>
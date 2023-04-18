<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

    <style>
        #slider {
            margin-top: 50px;
        }

        .card-header {
            font-weight: bold;
            text-align: center;
        }

        .list-group-item {
            cursor: pointer;
        }

        .card-body form {
            margin-bottom: 0;
        }

        .card-body input[type="email"] {
            margin-bottom: 10px;
        }

        .mt-3 {
            margin-bottom: 8px;
        }

        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px;
        }

        @media (max-width: 768px) {
            .navbar-collapse {
                margin-top: 20px;
            }
        }
    </style>
</head>

<body class="antialiased">


    <body>
        <header>
            <nav class="container navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>


                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    @if (Route::has('login'))
                        <ul class="navbar-nav">
                            @auth
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-outline-secondary nav-link mr-2"
                                        href="{{ route('login') }}">Connexion</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="btn btn-outline-info nav-link"
                                            href="{{ route('register') }}">Inscription</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>


                    @endif
                </div>
            </nav>
        </header>



        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div id="slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider" data-slide-to="0" class="active"></li>
                                <li data-target="#slider" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://picsum.photos/id/1000/1000/500"
                                        alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2>Titre de l'article</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae eros
                                            nec ipsum efficitur tincidunt. Maecenas eget purus ac quam bibendum laoreet.
                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia Curae; Aenean commodo aliquet lorem a euismod. Integer rhoncus
                                            convallis nulla ac venenatis. Curabitur imperdiet felis in convallis
                                            pharetra.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://picsum.photos/id/1001/1000/500"
                                        alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2>Titre de l'article</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae eros
                                            nec ipsum efficitur tincidunt. Maecenas eget purus ac quam bibendum laoreet.
                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia Curae; Aenean commodo aliquet lorem a euismod. Integer rhoncus
                                            convallis nulla ac venenatis. Curabitur imperdiet felis in convallis
                                            pharetra.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <h2 class="mt-5 mb-3">Derniers articles</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="https://picsum.photos/id/1015/600/400"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Titre de l'article</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nullam vitae eros nec ipsum efficitur tincidunt.</p>
                                        <div class="mt-3">
                                            <i class="fa fa-eye"></i> 500 vues
                                            <i class="fa fa-comments"></i> 10 commentaires
                                        </div>
                                        <a href="#" class="btn btn-primary">Lire la suite</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="https://picsum.photos/id/1016/600/400"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Titre de l'article</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nullam vitae eros nec ipsum efficitur tincidunt.</p>
                                        <div class="mt-3">
                                            <i class="fa fa-eye"></i> 500 vues
                                            <i class="fa fa-comments"></i> 10 commentaires
                                        </div>
                                        <a href="#" class="btn btn-primary">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="mt-5 mb-3">À la une</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="https://picsum.photos/id/1025/600/400"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Titre de l'article</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nullam vitae eros nec ipsum efficitur tincidunt.</p>
                                        <div class="mt-3">
                                            <i class="fa fa-eye"></i> 500 vues
                                            <i class="fa fa-comments"></i> 10 commentaires
                                        </div>
                                        <a href="#" class="btn btn-primary">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="https://picsum.photos/id/1026/600/400"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Titre de l'article</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nullam vitae eros nec ipsum efficitur tincidunt.</p>
                                        <div class="mt-3">
                                            <i class="fa fa-eye"></i> 500 vues
                                            <i class="fa fa-comments"></i> 10 commentaires
                                        </div>
                                        <a href="#" class="btn btn-primary">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">


                        <div class="card mb-4" style="margin-top: 50px;">
                            <div class="card-header">
                                Catégories
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Catégorie 1</li>
                                <li class="list-group-item">Catégorie 2</li>
                                <li class="list-group-item">Catégorie 3</li>
                            </ul>
                        </div>

                        <div class="card mb-4" style="border-radius: 8px; overflow: hidden;">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://picsum.photos/id/1025/600/400"
                                            alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'article 1</h5>
                                            <p>Description de l'article 1</p>
                                            <p class="badge badge-secondary">Nombre de vues : 1000</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://picsum.photos/id/1025/600/400"
                                            alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'article 2</h5>
                                            <p>Description de l'article 2</p>
                                            <p class="badge badge-secondary">Nombre de vues : 500</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://picsum.photos/id/1025/600/400"
                                            alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'article 3</h5>
                                            <p>Description de l'article 3</p>
                                            <p class="badge badge-secondary">Nombre de vues : 250</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                Abonnez-vous à notre newsletter
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Entrez votre adresse email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit"
                                                class="btn btn-primary btn-block">S'inscrire</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                À propos
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae eros nec ipsum
                                    efficitur tincidunt. Maecenas eget purus ac quam bibendum laoreet.</p>
                            </div>
                        </div>


                    </div>
                </div>
        </main>

        <footer>
            <p>© 2023 Blog</p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-base.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    </body>

</html>
</body>

</html>

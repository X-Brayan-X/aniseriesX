<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/estilos.css">

  </head>
  <body class="backgroup">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/eb3c9887e1.js"></script>
    <header>
        <?php require_once "navbar.php"; ?>
        <div class="container">
        <div class="ml-4 sidebar">
            <div class="card">
                <h1 class="text-center">Acciones</h1>
                <ul class=" list-unstyled">
                    <li class="list-action-panel">
                        <a href="subirAnime.php">
                            Add Anime
                        </a>
                    </li>
                    <li class="list-action-panel">
                        <a href="">
                            Add peliculas
                        </a>
                    </li>
                    <li class="list-action-panel">
                        <a href="">
                            Add Series
                        </a>
                    </li>
                    <li class="list-action-panel">
                        <a href="">
                            Delete Anime
                        </a>
                    </li>
                    <li class="list-action-panel">
                        <a href="">
                            Delete Peliculas
                        </a>
                    </li>
                    <li class="list-action-panel">
                        <a href="">
                            Delete Series
                        </a>
                    </li>
                    <li class="list-action-panel">
                        <a href="">
                            Add Admin
                        </a>
                    </li>
                </ul>
            </div>

        </div>
            <div class=" container mt-4"aling="center">
                <div class="card">
                    <h1 class="ml-4">Bienvenido a el panel de administracion</h1>
                    <ul class="list-panel ml-4">
                        <li class="list-panel-item"><div class=" align-self-center text-center mx-2"><a><i class="fa fa-upload" aria-hidden="true"></i></a><p>Add Anime</p></div></li>
                        <li class="list-panel-item"><div class=" align-self-center text-center mx-2"><a><i class="fa fa-upload" aria-hidden="true"></i></a><p>Add Pelicula</p></div></li>
                        <li class="list-panel-item"><div class=" align-self-center text-center mx-2"><a><i class="fa fa-upload" aria-hidden="true"></i></a><p>Add Serie</p></div></li>
                        <li class="list-panel-item"><div class=" align-self-center text-center mx-2"><a><i class="fa fa-trash" aria-hidden="true"></i></a><p>Delete Anime</p></div></li>
                        <li class="list-panel-item"><div class=" align-self-center text-center mx-2"><a><i class="fa fa-trash"aria-hidden="true"></i></a><p>Delete Pelicula</p></div></li>
                        <li class="list-panel-item"><div class=" align-self-center text-center mx-2"><a><i class="fa fa-trash"aria-hidden="true"></i></a><p>Delete Serie</p></div></li>
                        <li class="list-panel-item"><div class=" align-self-center text-center mx-2"><a><i class="fa fa-user-plus" aria-hidden="true"></i></a><p>Add admin</p></div></li>
                    </ul>
                </div>

            </div>
            </div>
        <?php require_once "footer.php"; ?>
    </header>
  </body>
</html>
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
            <div class=" container card mt-4 mlogin">
                <div class="card">
                    <h1>Subir un anime</h1>
                    <form class="mlogin">
                        <div class="form-group">
                            <input type="text" name="nombreAnime" placeholder="nombreAnime del anime" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="imagen" placeholder="Subir imagen" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sinopsis" placeholder="descricion" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="subtmi" name="Enviar" class="btn btn-success btn-block" value="Subir anime">
                        </div>
                    </form>
                </div>

            </div>
        <?php require_once "footer.php"; ?>
    </header>
  </body>
</html>
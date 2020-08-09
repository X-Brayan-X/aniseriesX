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
    <link rel="stylesheet" type="text/css" href=" <?php echo constant('URL'); ?>view/css/estilos.css">
    

  </head>
  <body class="backgroup">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php require_once "view/script-body.php"; ?>

    <header>
        <?php require_once "view/navbar.php"; ?>
        <?php require_once "view/bannerpublic.php"; ?>
        <?php require_once "view/navbar-lateral.php"; ?>
            <div class="container">
                    <div class="card mt-4 row ">
                        <div class="card ">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="img/p2v.png " class="card-img rounded" alt="..."style="max-width:250px">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <table class="table table-sm table-dark rounded">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Servidor</th>
                                    <th scope="col">Descargar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mega</td>
                                    <td>Otto</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Mediafire</td>
                                    <td>Thornton</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Drive</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <?php require_once "view/footer.php"; ?>
    </header>
  </body>
</html>
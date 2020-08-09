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
            <div class=" container card mt-4">
                <div>
                  <form>
                    <div class="form-group mlogin mt-4">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="text" class="form-control"name="username" placeholder="Enter email">
                    </div>
                    <div class="form-group mlogin">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control"name="password" placeholder="Password">
                    </div>
                    <div class="form-check mlogin">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" name="username" class="btn btn-primary mlogin mt-3 mb-4">Login</button>
                    <button type="submit" name="login"class="btn btn-danger btn-primary mlogin mt-3 mb-4">Registrarse</button>
                  </form>
                </div>

            </div>
        <?php require_once "view/footer.php"; ?>
    </header>
  </body>
</html>
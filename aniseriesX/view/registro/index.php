<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php require_once "view/head.php"; ?>
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
                      <input type="text" class="form-control"name="username" id="username" placeholder="Enter email">
                    </div>
                    <div class="form-group mlogin">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control"name="password" id="password" placeholder="Password">
                    </div>
                    <input type="submit" name="Registrate" class="btn btn-info mlogin mb-3" value="Registrate">
                  </form>
                  <div>
                    <div class="alert alert-danger mlogin" id="alert" role="alert">
                      This is a danger alert—check it out!
                    </div>
                  </div>
                </div>

            </div>
        <?php require_once "view/footer.php"; ?>
    </header>
  </body>
  </html>

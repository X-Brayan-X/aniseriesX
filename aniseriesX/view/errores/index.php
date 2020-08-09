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
        <div class="container card mt-4">
			<h1><?php echo $this->mensaje; ?></h1>
		</div>
        <?php require_once "view/footer.php"; ?>
    </header>
  </body>
</html>
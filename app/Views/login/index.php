<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="continer">

    <div class="row">
      <div class="col-md-4 mx-auto pt-5">
        <h1>Login!</h1>
        <form method="POST" action="login/prosesLogin">
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password">
            </div>
          </div>


          <div class="form-group row">
            <div class="col-sm-4 mx-auto">
              <button type="submit" class="btn btn-primary mx-auto">Login</button>
            </div>
          </div>
        </form>
        <p>
          <?php if (!empty(session()->getFlashdata('gagal'))) {
          ?>
            <div class="alert alert-warning">
              <?= session()->getFlashdata('gagal'); ?>
            </div>

          <?php   } ?>


        </p>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

    <title>Assist You</title>
  </head>
  <body>
    <div class="container">
        <h4 class="text-center text-white font-weight-bold">FORM LOGIN</h4>
        <hr>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label class="text-white">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
                </div>
            </div>

            <div class="form-group">
                <label class="text-white">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-solid fa-unlock"></i></div>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                </div>
            </div>

            <div class="class">
                <form action="assistyou.html">
                    <button type="submit" class="btn btn-primary" name="submit" default>SUBMIT</button>
                </form>
                <button type="reset" class="btn btn-danger">RESET</button>
            </div>

        </form>
    </div>

    
    <script src="https://kit.fontawesome.com/304a135e44.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

    <div class="login pt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header text-white bg-dark text-center">
                            Login
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('prosesLogin') ?>" method="post">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input class="form-control" type="email" name="email" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input class="form-control" type="password" name="password" id="">
                                </div>
                                <button class="btn btn-dark btn-block" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>
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

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= base_url() ?>">
                iKereta
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('konfirmasi') ?>">Konfirmasi Pembayaran</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('login') ?>">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="app-jumbotron">
                <h1 class="display-4">Selamat datang di iKereta!</h1>
                <p class="lead">Anda dapat melakukan pemesanan Tiket Kereta Api Online dengan mudah</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 info-panel">
                <form action="" method="post">
                    <div class="form-row">
                            <div class="col-lg">
                                    <label class="servis-title" for="Merk">Stasiun Asal</label>
                                    <select class="form-control servis-form" id="Merk">
                                        <option selected disabled hidden>Merk</option>
                                        <optgroup label="A - C"></optgroup>
                                        <option>Alfa Romero</option>
                                        <option>BMW</option>
                                        <option>Cadillac</option>
                                    </select>
                            </div>
                            <div class="col-lg">
                                    <label class="servis-title" for="Merk">Stasiun Tujuan</label>
                                    <select class="form-control servis servis-form" id="Merk">
                                        <option selected disabled hidden>Model</option>
                                        <optgroup label="Model"></optgroup>
                                        <option>Alfa Romero</option>
                                        <option>BMW</option>
                                        <option>Cadillac</option>
                                    </select>
                            </div>
                            <div class="col-lg">   
                                    <label class="servis-title" for="Merk">Tanggal Berangkat</label>
                                    <input class="form-control" type="date" name="" id="">
                            </div>
                            <div class="col-lg">   
                                    <label class="servis-title" for="Merk">Jumlah Penumpang</label>
                                    <select class="form-control servis servis-form" id="Merk">
                                        <option selected disabled hidden>Varian</option>
                                        <optgroup label="Manual"></optgroup>
                                        <option>Alfa Romero</option>
                                        <option>BMW</option>
                                        <optgroup label="Matic"></optgroup>
                                        <option>Cadillac</option>
                                    </select>
                            </div>
                            <div class="col-lg-3">
                                    <label class="servis-title" for="Merk">&nbsp</label>
                                    <button class="btn btn-dark form-control" type="submit">Pesan Sekarang</button>
                            </div>
                    </div>
                </form>
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
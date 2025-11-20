<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum Tani</title>
    <link href="css/style-user.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php

    session_start();

    ?>
    <div class="background-body">
        <!-- Header -->
        <div class="header-container">
            <p class="text-header">PENDAFTARAN KARTU TANI </p>
            <img src="assets/logo-garut.svg" class="logo-header" alt="logo-garut" />
            <a href="index.php">
                <img src="assets/logo-bp3k.svg" class="logo-header" alt="logo-bp3k" />
            </a>
        </div>
        <!-- End Header -->

        <div class="card container-main" style="background-color: rgb(0,0,0,0.5);">
            <div class="card-body">
                <p class="text-main">Kartu Tani merupakan alat transaksi berupa kartu debit seperti ATM yang difungsikan
                    sebagai sarana untuk melakukan penebusan pupuk subsidi bagi petani.</p>
                <p class="text-main-2">Keberadaan Kartu Tani ini sangat penting karena dirasan yang membawa dampak
                    penting dan manfaatnya sangat besar bagi petani karena dengan memiliki Kartu Tani ini, para petani
                    mendapat kepastian dalam memperoleh pupuk bersubsidi.</p>
                <a href="EndUser.php">
                    <button class="btn-buat">
                        MULAI MEMBUAT
                    </button></a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
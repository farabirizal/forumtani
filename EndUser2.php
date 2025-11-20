<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum Tani</title>
    <link href="css/style-user.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="end-user-body">
    <?php
    session_start();

    ?>

    <div class="card container-main2" style="background-color: rgb(255,255,255,0.3); height: 100%;">
        <div class="card-body">

            <form action="cekData.php" method="post" id="myForm">
                <div class="form-group row">
                    <div class="col-11">
                        <input class="form-control input-data" type="text" id="input-nik" placeholder="Masukan nama" name="nama">
                    </div>
                    <p id="text-desa">Desa:</p>
                    <div class="container-radio-1">
                        <label class="radio-inline btn-radio" id="radio-btn-1">
                            <input type="radio" name="optradio" value="Sukamurni" class="radio-button-1">Sukamurni
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-2">
                            <input type="radio" name="optradio" value="Karyamekar" class="radio-button-1">Karyamekar
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-3">
                            <input type="radio" name="optradio" value="Dawungsari" class="radio-button-1">Dawungsari
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-4">
                            <input type="radio" name="optradio" value="Sukahati" class="radio-button-1">Sukahati
                        </label>
                    </div>
                    <div class="container-radio-1">
                        <label class="radio-inline btn-radio" id="radio-btn-5">
                            <input type="radio" name="optradio" value="Sukamaju" class="radio-button-1">Sukamaju
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-6">
                            <input type="radio" name="optradio" value="Cilawu" class="radio-button-1">Cilawu
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-7">
                            <input type="radio" name="optradio" value="Dangiang" class="radio-button-1">Dangiang
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-8">
                            <input type="radio" name="optradio" value="Desakolot" class="radio-button-1">Desakolot
                        </label>
                    </div>
                    <div class="container-radio-1">
                        <label class="radio-inline btn-radio" id="radio-btn-9">
                            <input type="radio" name="optradio" value="Mekarsari" class="radio-button-1">Mekarsari
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-10">
                            <input type="radio" name="optradio" value="Pasanggrahan" class="radio-button-1">Pasanggrahan
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-11">
                            <input type="radio" name="optradio" value="Sukamukti" class="radio-button-1">Sukamukti
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-12">
                            <input type="radio" name="optradio" value="Mangkurakyat" class="radio-button-1">Mangkurakyat
                        </label>
                    </div>
                    <div class="container-radio-1">
                        <label class="radio-inline btn-radio" id="radio-btn-13">
                            <input type="radio" name="optradio" value="Sukatani" class="radio-button-1">Sukatani
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-14">
                            <input type="radio" name="optradio" value="Ngamplangsari" class="radio-button-1">Ngamplangsari
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-15">
                            <input type="radio" name="optradio" value="Margalaksana" class="radio-button-1">Margalaksana
                        </label>
                    </div>
                    <div class="container-radio-1">
                        <label class="radio-inline btn-radio" id="radio-btn-16">
                            <input type="radio" name="optradio" value="Dayeuhmanggung" class="radio-button-1">Dayeuhmanggung
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-17">
                            <input type="radio" name="optradio" value="Ngamplang" class="radio-button-1">Ngamplang
                        </label>
                        <label class="radio-inline btn-radio" id="radio-btn-18">
                            <input type="radio" name="optradio" value="Mekarmukti" class="radio-button-1">Mekarmukti
                        </label>
                    </div>
                    <div class="col-11 container-input-radio">
                        <input class="form-control input-data" type="text" id="input-alamat" placeholder="Masukan Alamat (KP/RT/RW/Desa)" name="alamat">
                    </div>
                    <div class="col-11">
                        <input class="form-control input-data" type="text" id="input-ttl" placeholder="Masukan Tempat, Tanggal lahir" name="ttl">
                    </div>
                </div>

            </form>
            <div class="container-button-upload-radio">
                <a href="EndUser1.php" id="btn-upload-back">
                    <Button class="btn-upload-back">Kembali</Button></a>
                <button type="submit" class="btn-upload-next" id="btn-upload-next">Berikutnya</button>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        document.getElementById("btn-upload-next").addEventListener("click", function() {
            document.getElementById("myForm").submit();
        });
    </script>
</body>

</html>
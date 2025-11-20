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

            <form action="cekKetiga.php" method="post" id="myForm">
                <div class="form-group row">
                    <div class="col-11">
                        <input class="form-control input-data" type="text" id="input-ibu" placeholder="Masukan Nama Ibu Kandung" name="ibu">
                    </div>
                    <p id="text-komoditas">Pilih komoditas yang ditanam: (bisa lebih dari 1)</p>
                    <div class="container-checkbox">
                        <label for="checkbox-1" class="checkbox-label">
                            <input type="checkbox" id="checkbox-1" name="komoditas" value="Jagung">
                            Jagung</label>
                        <label for="checkbox-2" class="checkbox-label">
                            <input type="checkbox" id="checkbox-2" name="komoditas" value="Bawang Merah">
                            Bawang Merah</label>
                        <label for="checkbox-3" class="checkbox-label">
                            <input type="checkbox" id="checkbox-3" name="komoditas" value="Padi Sawah">
                            Padi Sawah</label>
                        <label for="checkbox-4" class="checkbox-label">
                            <input type="checkbox" id="checkbox-4" name="komoditas" value="Cabai">
                            Cabai</label>
                        <label for="name3" class="checkbox-label">
                            <input type="checkbox" id="checkbox-4" name="komoditas" value="Cabai" onclick="if(this.checked){ document.getElementById('name3').focus();}">
                            Yang Lain: <input type="text" id="name3" name="name3" /></label>
                    </div>
                    <div class="col-11">
                        <input class="form-control input-data" type="text" id="input-tanah" placeholder="Luas lahan sawah dan darat sesuai SPPT (Ha)" name="luas_lahan">
                    </div>
                </div>

            </form>
            <div class="container-button-upload-radio">
                <a href="EndUser2.php" id="btn-upload-back"><Button class="btn-upload-back">Kembali</Button></a>
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
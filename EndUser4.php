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

            <form action="cekStatus.php" method="post" id="myForm">
                <div class="form-group row">
                    <p id="text-pemilik">Pemilik/Penggarap : </p>
                    <label class="btn-pemilik-radio">
                        <input type="radio" name="optradio" value="Pemilik" class="radio-button-1">Pemilik
                    </label>
                    <label class="btn-pemilik-radio">
                        <input type="radio" name="optradio" value="Penggarap" class="radio-button-1">Penggarap
                    </label>
                    <label class="btn-pemilik-radio">
                        <input type="radio" name="optradio" value="Pemilik & Penggarap" class="radio-button-1">Pemilik &
                        Penggarap
                    </label>
                    <div class="col-11" style="margin-top: 20px;">
                        <input class="form-control input-data" type="text" name="no_hp" id="input-hp" placeholder="No HP">
                    </div>
                </div>

            </form>
            <div class="container-button-pemilik-radio">
                <a href="EndUser3.php" id="btn-upload-back"><Button class="btn-upload-back">Kembali</Button></a>
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
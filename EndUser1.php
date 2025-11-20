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

            <div class="container">
                <form action="cekGambar.php" method="post" enctype="multipart/form-data" id="myForm">
                    <div class="column">
                        <div class="col-sm-4" style="margin-bottom: 10px;">
                            <label for="upload-ktp">
                                <input type="file" name="ktp" class="upload-file" id="upload-ktp" />
                                <img src="assets/choose-image.svg" class="upload-file-resp" />
                            </label>
                            <p class="text-upload-file">*upload berupa foto ktp</p>
                        </div>
                        <div class="col-sm-4" style="margin-bottom: 10px;">
                            <label for="upload-kk">
                                <input type="file" name="kk" id="upload-kk" class="upload-file" />
                                <img src="assets/choose-image.svg" class="upload-file-resp" />
                            </label>
                            <p class="text-upload-file">*upload berupa foto kartu keluarga</p>
                        </div>
                        <div class="col-sm-4" style="margin-bottom: 10px;">
                            <label for="upload-sppt">
                                <input type="file" name="sppt" id="upload-sppt" class="upload-file" />
                                <img src="assets/choose-image.svg" class="upload-file-resp" />
                            </label>
                            <p class="text-upload-file">*upload berupa foto SPPT lahan</p>
                        </div>
                    </div>

                </form>
                <div class="container-button-upload">
                    <a href="EndUser.php" id="btn-upload-back">
                        <Button class="btn-upload-back">Kembali</Button>
                    </a>
                    <button type="submit" class="btn-upload-next" id="btn-upload-next">Berikutnya</button>
                </div>
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
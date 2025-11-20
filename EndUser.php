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


    <div class="card container-main2" style="background-color: rgb(255,255,255,0.3); height: 100%;">
        <div class="card-body">
            <form action="cekNik.php" method="post" id="myForm">
                <div class="form-group row">
                    <div class="col-11">
                        <input class="form-control input-data" type="text" id="input-nik" placeholder="Masukan No NIK (16 digit)" name="nik">
                    </div>
                </div>

            </form>
            <div class="container-button">
                <a href="HomeUser.php" id="btn-back">
                    <Button class="btn-back">Kembali</Button>
                </a>
                <button type="submit" class="btn-next" id="btn-next">Berikutnya</button>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        document.getElementById("btn-next").addEventListener("click", function() {
            document.getElementById("myForm").submit();
        });
    </script>
</body>

</html>
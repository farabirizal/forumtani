<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Forum Tani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container" id="base-container">
        <div class="row">
            <div class="col-sm-6 offset-md-3">
                <div class="card my-5" style="border-radius: 45px;">
                    <form class="card-body cardbody-color p-lg-5" id="login-container" method="post" action="cek_login.php">
                        <div class="text-left">
                            <a href="HomeUser.php"><img src="./assets/back-login.png" width="25px" height="25px"></a>
                        </div>
                        <div class="text-center">
                            <img src="./assets/icon-admin.png" width="120px" alt="profile" class="img-thumbnail" id="img-thumbnail">
                            <p id="admin-text">ADMIN</p>
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control" id="input-id" placeholder="ID" name="username">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" id="input-pass" placeholder="Password" name="password">
                        </div>
                        <!-- <div class="text-left" id="text-lupa">
                            <a href="#" style="color: black;">
                                <p>Lupa Password?</p>
                            </a>
                        </div> -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-color px-5 mb-4">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
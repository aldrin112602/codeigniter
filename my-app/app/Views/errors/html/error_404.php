<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center" style="
        background: rgb(180,58,159);
        background: linear-gradient(45deg, rgba(180,58,159,1) 0%, rgba(96,29,253,1) 100%);
        min-height: 100vh;
    ">
    <section class="container-fluid text-center bg-white py-3 col-md-6 text-dark rounded shadow">
        <h1 class="mt-5 h1 text-secondary fw-bold text-shadow">404  - Page Not Found!</h1>
        <img class="img-fluid" src="https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif"
            alt="404 FILE NOT FOUND IMAGE"
            srcset="https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif">
        <h3 style="margin-top: -100px;">
            Look like you're lost
        </h3>
        <p>The page you are looking for not avaible!</p>
        <a class="btn btn-success px-5 btn-lg" href="./">Back</a>
        <br><br>
    </section>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to ChatIgniter! | <?= CodeIgniter\CodeIgniter::CI_VERSION ?>! | Page rendered in {elapsed_time}s |
        Environment: <?= ENVIRONMENT ?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://codeigniter.com/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" href="https://codeigniter.com/favicons/favicon.png">
    <link rel="mask-icon" href="https://codeigniter.com/favicons/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-config" content="https://codeigniter.com/favicons/browserconfig.xml">
    <link rel="stylesheet" href="src/bootstrap.min.css">

    <!-- STYLES -->

    <style {csp-style-nonce}>
    * {
        transition: background-color 300ms ease, color 300ms ease;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    *:focus {
        background-color: rgba(221, 72, 20, .2);
        outline: none;
    }

    body::-webkit-scrollbar {
        width: 0;
    }

    html,
    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
        
    }

    body {
        min-height: 100vh;
        background-image: linear-gradient(26deg, #e0e4f2 0%, #f0f1ff 46%, #ffffff 100%);
    }
    </style>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="
        background-color: #4158D0;
        background-image: linear-gradient(225deg, #4158D0 0%, #5055c8 46%, #7076ff 100%);
    ">
        <div class="container-fluid px-5 py-3">
            <a class="navbar-brand" href="#">ChatIgniter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Services">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Github</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <div class="" style="position: relative;">
                        <input class="form-control-lg form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <span class="material-symbols-outlined text-secondary position-absolute" style="
                            top: 50%;
                            right: 12px;
                            transform: translateY(-50%);
                        ">
                            search
                        </span>
                    </div>
                    <button class="btn btn-light border mx-2" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <section class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-12 col-md-5 text-dark">
                <h1 class="fw-bold text-shadow-lg" style="font-size: 4rem;">Welcome to ChatIgniter!</h1>
                <h2 class="fw-bold mt-3">Talking with everyone and keep secure.</h2>
                <p class="fs-4 my-5" style="text-shadow: 1px 1px 1px #fff; line-height: 2.7rem;">
                    Welcome to ChatIgniter - where secure conversations happen! Connect with others, share ideas, and
                    forge meaningful connections. Join now and experience the power of secure communication.
                </p>

                <div class="d-flex align-items-center justify-content-center gap-4">
                    <button class="btn shadow border btn-lg text-white fw-semi-bold"
                        style="width: 200px; background-color: #4158D0; background-image: linear-gradient(225deg, #4158D0 0%, #5055c8 46%, #7076ff 100%);"
                        type="button"
                        data-bs-toggle="modal" data-bs-target="#Signup_form"
                        >Signup now</button>
                    <button class="btn shadow btn-light border btn-lg" style="width: 200px"
                        type="button"
                        data-bs-toggle="modal" data-bs-target="#Signin_form"
                        >Sign-In</button>
                </div>
            </div>
            <div class="col-12 col-md-7 d-flex align-items-center justify-content-center my-4">
                <img class="img-fluid" src="images/Tablet-development.png" alt="Tablet-development image"
                    srcset="images/Tablet-development.png">
            </div>
        </div>
    </section>



    <!-- SIGNUP MODAL -->
    <!-- Modal -->
    <form action="javascript:void(0)" method="POST" class="modal fade modal-lg" id="Signup_form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header px-4 py-3">
                    <h1 class="modal-title fs-4" id="staticBackdropLabel">Create an Account</h1>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5 py-3">
                    <div class="row my-2">
                        <div class="col">
                            <label class="form-label fs-5">First name</label>
                            <input required type="text" class="form-control form-control-lg" name="first_name">
                        </div>
                        <div class="col">
                            <label class="form-label fs-5">Last name</label>
                            <input required type="text" class="form-control-lg form-control" name="last_name">
                        </div>
                    </div>
                    <label class="form-label fs-5 mt-2">Email-adddress</label>
                    <input required type="email" class="form-control-lg form-control" name="email">
                    <label class="form-label fs-5 mt-2">Username</label>
                    <input required type="text" class="form-control-lg form-control" name="username">
                    <label class="form-label fs-5 mt-2">Password</label>
                    <input required type="password" class="form-control-lg form-control" name="password">
                    <label class="form-label fs-5 mt-2">Confirm Password</label>
                    <input required type="password" class="form-control-lg form-control" name="confirm_password">
                    <label class="form-label fs-5 mt-2">Profile</label>
                    <input accept="image/*" required type="file" class="form-control-lg form-control" name="profile">
                </div>
                <div class="modal-footer px-5 py-3">
                    <button type="reset" class="btn btn-danger btn-lg px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-lg px-4">Continue</button>
                </div>
            </div>
        </div>
    </form>
    <!-- SIGNUP MODAL -->


    <!-- SIGN-IN MODAL -->
    <!-- Modal -->
    <form action="javascript:void(0)" method="POST" class="modal fade modal-lg" id="Signin_form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header px-4 py-3">
                    <h1 class="modal-title fs-4" id="staticBackdropLabel">Sign-in your Account</h1>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5 py-3">
                    <label class="form-label fs-5 mt-2">Username</label>
                    <input required type="text" class="form-control-lg form-control" name="username">
                    <label class="form-label fs-5 mt-2">Password</label>
                    <input required type="password" class="form-control-lg form-control" name="password">
                </div>
                <div class="modal-footer px-5 py-3">
                    <button type="reset" class="btn btn-danger btn-lg px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-lg px-4">Continue</button>
                </div>
            </div>
        </div>
    </form>
    <!-- SIGN-IN MODAL -->


    <footer class="p-4 text-center border-top border-2" style="background-color: rgba(100, 200, 255, 0.1)">
        &copy; <?= date('Y') ?> ChatIgniter - All rights reserved<br><a class="nav-link d-inline-block" href="#">Privacy
            Policy</a> | <a class="nav-link d-inline-block" href="#">Terms of Service</a> | <a
            class="nav-link d-inline-block" href="#">Contact Us</a>
        </p>
    </footer>

    <!-- bootstrap scripts -->
    <script src="src/popper.min.js"></script>
    <script src="src/bootstrap.min.js"></script>
</body>

</html>
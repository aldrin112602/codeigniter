<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="
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
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="./About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Github</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <div class="" style="position: relative;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
    <footer class="p-4 text-center border-top border-2" style="background-color: rgba(100, 200, 255, 0.1)">
            &copy; <?= date('Y') ?> ChatIgniter - All rights reserved<br><a class="nav-link d-inline-block" href="#">Privacy Policy</a> | <a class="nav-link d-inline-block" href="#">Terms of Service</a> | <a class="nav-link d-inline-block" href="#">Contact Us</a>
        </p>
    </footer>
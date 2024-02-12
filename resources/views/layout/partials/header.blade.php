<nav class="navbar">
    <div class="container-fluid ms-5 me-5 d-flex justify-content-between">
        <div class="navbar-brand">
            <a class="navbar-brand text-bg-dark" href="#">
                <img src={{ asset('logo.png') }} alt="Bootstrap" width="" height="70">
            </a>
            <span class="navbar-text text-light">
                Every cook's repository!
            </span>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>
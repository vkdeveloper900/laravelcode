<nav class="navbar fixed navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">A to Z</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/students">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/model">Model</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/http">Http</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/userquery">Userquery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/form">Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/test">test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/upload">upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/uploaddb">uploaddb</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/getimage">Gallary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/language">Language</a>
                </li>


                @if (session('user'))
                    <li class="nav-item ">
                        <a class="nav-link btn btn-danger " href="logout">LogOut</a>
                    </li>
                    <li class="nav-item  ">
                        <p class="nav-link ">username: {{ session('user') }} </p>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/input">Register</a>
                    </li>
                @endif

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </div>

</nav>

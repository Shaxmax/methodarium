<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8" />
<title>NEVEREST Methodarium</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta name="description" content="" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
<link rel="icon" href="favicon.png">
</head>

<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Methodarium</a>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </div>
</header>
<main>

                @yield('content')




</main>

<footer>
    <div class="container">
    <div class="footer-text">© NEVEREST Lifelong Learning GmbH | Markus Frank-Schagerl</div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
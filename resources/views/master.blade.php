<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Riditmx</title>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/maincss.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-ridit">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="logo.png" alt="" class="img-fluid" width="100px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acerca de la RIDIT
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/acerca">Acerca de</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/acerca"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/publicaciones">Publicaciones de la RIDIT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/noticias">Noticias e información sobre ciencia y tecnología</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Información sobre el XIII Congreso Nacional
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="ConvocatoriaRIDIT.pdf" download target="_blank">Convocatoria</a>
                            <a class="dropdown-item" href="/fechas">Fechas Importantes</a>
                            <a class="dropdown-item" href="#">Información sobre hoteles</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galería</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Enlaces</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5 mb-5" id="app">
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <!-- BEGIN Custom JavaScript -->
        <script src="js/app.js"></script>
    </body>
</html>

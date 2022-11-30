<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    @if( auth()->check() )
                        <li><a href="{{ route('accueil.rpg') }}" class="nav-link px-2 text-white">
                            <p onmouseover="this.style.color='#6796e0';" onmouseout="this.style.color='';">ACCUEIL</p></a>
                        </li>

                        <li><a href="{{ route('personnage.rpg') }}" class="nav-link px-2 text-white">
                            <p onmouseover="this.style.color='#6796e0';" onmouseout="this.style.color='';">PERSONNAGE</p></a>
                        </li>

                        <li><a href="{{ route('groupe.rpg') }}" class="nav-link px-2 text-white">
                            <p onmouseover="this.style.color='#6796e0';" onmouseout="this.style.color='';">GROUPE</p></a>
                        </li>
                        
                        <li>
                            <a href="{{ route('profile.index') }}" style="text-transform:uppercase;" class="nav-link px-2 text-white">
                                <p 
                                    style="color:red;"
                                    onmouseover="this.style.color='#6796e0';" 
                                    onmouseout="this.style.color='red';">
                                
                                    {{ auth()->user()->pseudo }}
                                </p>
                            </a>
                        </li>
                    @else
                        <li><a href="{{ route('accueil.rpg') }}" class="nav-link px-2 text-white">
                            <p onmouseover="this.style.color='#6796e0';" onmouseout="this.style.color='';">ACCUEIL</p></a>
                        </li>

                        <li>
                            <a href="{{ route('connecte.index') }}" class="nav-link px-2 text-white">
                                <p 
                                    style="color:green;"
                                    onmouseover="this.style.color='#6796e0';" 
                                    onmouseout="this.style.color='green';">
                                
                                    VEUILLEZ VOUS AUTHENTIFIER
                                </p>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </header>

    <main class="container">
        <div class="content">
            @yield('content')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

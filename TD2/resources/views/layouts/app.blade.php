<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>HOT TAKES - The Web's Best Hot Sauce Reviews</title>

    <!-- Lien vers Bootstrap (CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Styles personnalisés pour rappeler l'exemple */
        .navbar-brand {
            font-weight: bold;
            display: flex;
            align-items: center;
            margin: 0 auto;  /* Center the navbar-brand */
        }
        .navbar-brand img {
            height: 80px;  /* Increased from 40px to 80px */
            margin-right: 10px;
        }
        .hot-takes-title {
            font-size: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0;
        }
        .hot-takes-subtitle {
            font-size: 0.9rem;
            font-style: italic;
            margin: 0;
        }
        .sauce-card img {
            max-height: 250px;
            object-fit: contain;
        }
        
        /* Adjust navbar layout for centered logo */
        .navbar .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        /* Move the navigation links below the logo */
        .navbar-nav {
            margin-top: 10px;
        }
    </style>

</head>
<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo et titre -->
            <a class="navbar-brand" href="{{ route('sauces.index') }}">
                <!-- Mettez ici le chemin de votre logo si vous en avez un -->
                <img src="https://images.squarespace-cdn.com/content/5c6ae13e8dfc8ca6f2c0d885/1550531492206-NJTJCB40L3SCMYNKE490/HOT+TAKES-logo-black.png?format=1500w&content-type=image%2Fpng" alt="Hot Takes Logo">
                <div>
                    <div class="hot-takes-title">HOT TAKES</div>
                    <div class="hot-takes-subtitle">The web's best hot sauce reviews</div>
                </div>
            </a>

            <!-- Menu de navigation -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sauces.index') }}">All Sauces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sauces.create') }}">Add Sauce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Scripts Bootstrap (optionnels si vous utilisez des composants JS) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

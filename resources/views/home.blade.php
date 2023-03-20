<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/mvp.css@1.12/mvp.css"> 
    <title>Home</title>
</head>
<body>
<nav>
    <div>
        <h1>Home</h1>
    </div>
</nav>
<div>

        <div>
            <div>
                <button type="button" style="background-color: transparent">
                    <a href="{{ route('annonces.create') }}">Créer une annonce</a>
                </button>
            </div>
            <div >
                <div >
                    <div >
                        @if (count($annonces) > 0)
                            @foreach ($annonces as $annonce)
                                <div>
                                    <div>{{ $annonce->created_at }}</div>
                                    <div>
                                        <div>{{ $annonce->title }}</div>
                                        <div>
                                            <p>{{ $annonce->description }}</p>
                                            <span>{{ $annonce->price }} €</span>
                                            <h5>{{ $annonce->location }}</h5>
                                        </div>
                                        <a href='mailto:{{ $annonce->email }}'>contacter {{ $annonce->name }}</a>
                                        <a href="{{ route('annonces.show', $annonce->id) }}">Voir l'annonce</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Aucune annonce n'a été trouvée.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

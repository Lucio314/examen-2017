<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1>Recherche les candidats d'une filière</h1>

        <form action="{{ route('candidats.index') }}" method="GET" class="mt-3">
            <div class="form-group">
                <select class="form-select" id="search" name="search">
                    <option value="" selected disabled>Recherche</option>
                    @foreach ($filieres as $filiere)
                    <option value="{{$filiere->codefil}}">{{$filiere->codefil}}</option>
                    @endforeach
                </select>
                <button class="btn btn-secondary" type="submit">Search</button>
            </div>
        </form>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidats as $candidat)
                <tr>
                    <td>{{ $candidat->nom }}</td>
                    <td>{{ $candidat->prénom }}</td>
                    <td>{{ $candidat->sexe }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

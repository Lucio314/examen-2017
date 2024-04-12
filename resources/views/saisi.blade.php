<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="bottom">
        <div class="header">
            <h3>Vos Coordonnées</h3>
        </div>
        <form action="{{route('candidats.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control1">
            </div>
            <div class="form-group">
                <label for="prénom">Prénom</label>
                <input type="text" name="prénom" id="prénom" class="form-control2">
            </div>
            <div class="form-group">
                <label for="datnais">Date de Naissance</label>
                <input type="date" name="datnais" id="datnais" class="form-control3">
            </div>
            <div class="form-group">
                <label for="ville">Ville</label>
                <input type="text" name="ville" id="ville" class="form-control4">
            </div>
            <div class="form-group">
                <label for="sexe">Sexe</label>
                <input type="text" name="sexe" id="sexe" placeholder="M ou F" class="form-control5">
            </div>

                <label for="codefil">Filière</label>
                <select class="form-select" id="codefil" name="codefil" style="width: 150px">
                    <option value="" selected disabled>Recherche</option>
                    @foreach ($filieres as $filiere)
                    <option value="{{$filiere->codefil}}">{{$filiere->codefil}}</option>
                    @endforeach
                </select>
            <div class="btn">
                <button type="reset" class="btn btn-secondary">Effacer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</body>

</html>

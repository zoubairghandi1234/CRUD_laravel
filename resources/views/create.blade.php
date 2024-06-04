<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/create.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{route('store')}}" method="POST">
            @csrf
            <h2>Ajouter un modele</h2>
            <input type="text" placeholder="Module" name="intitule">
            <input type="date" placeholder="Date debut" name="date_debut">
            <input type="date" placeholder="Date fin" name="date_fin">
            <button>Create</button>
        </form>
    </div>
</body>
</html>
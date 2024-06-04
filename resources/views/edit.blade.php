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
        <form action="{{route('update',$module[0]->numero)}}" method="POST">
            @csrf
            <h2>Modifie le modele</h2>
            <input type="text" name="intitule" value="{{ $module[0]->intitule }}">
            <input type="date"  name="date_debut" value="{{ $module[0]->date_debut }}">
            <input type="date"  name="date_fin" value="{{ $module[0]->date_fin }}">
            <button>Update</button>
        </form>
    </div>
</body>
</html>
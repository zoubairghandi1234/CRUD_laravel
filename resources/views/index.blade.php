<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Top</title>
</head>
<body>
    <div class="header">
        <h2>Top developement</h2>
    </div>
    <div class="link">
        <form action="">
            <a href="#">List des modules</a>
        </form>
        <a href="{{ route('create') }}">Ajouter un modele</a>

    </div>
    <div class="body">
        <div class="title">
            <h3>calendrier de formation</h3>  
        </div>
        <table>
            <tr class="thead">
              <th>Numero</th>
              <th>Module</th>
              <th>Date debut</th>
              <th>Date fin</th>
              <th>Action</th>
              <th></th>
            </tr>
            @foreach ($modules as $item)
                <tr>
                    <td>{{ $item->numero }}</td>
                    <td>{{ $item->intitule }}</td>
                    <td>{{ $item->date_debut }}</td>
                    <td>{{ $item->date_fin }}</td>
                    <td>
                        {{-- <form action="{{ route('edit', $item) }}" method="POST">
                            @csrf
                            <button type="submit">Modifier</button>
                        </form> --}}
                        <a href="{{route('edit',$item->numero)}}">Modifier</a>
                    </td>
                    <td>
                        <form action="{{route('delete',$item->numero)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
          </table>
    </div>
    <div class="footer">
        <p> Top formation &copy; 2024</p>
    </div>


    
</body>
</html>
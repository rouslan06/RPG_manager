@extends('menu')

@section('title', 'Connexion')

@section('content')

    <h1 style='margin-top: 30px; margin-bottom: 30px;'>LES GROUPES</h1>

    <ul style='margin-left: -32px; display: flex; flex-direction: column-reverse;'>
        @foreach($groupes as $groupe)
            <div style='
                border: 2px solid black;
                border-radius: 5px;
                height: 250px;'
                onmouseover="this.style.border='2px solid red';" 
                onmouseout="this.style.border='2px solid black';">

                <p style='font-weight: bold; border-bottom: 2px solid black; padding: 5px; margin-bottom: 0px; background-color: grey;'>
                    Nom du groupe : {{ $groupe->nom }}
                </p>

                <div style='display: flex; flex-direction: row; height: 210px;'>
                    <div style='padding: 5px; width: 55%; border-right: 2px solid black;'>

                        <p style='font-weight: bold;'>
                            DESCRIPTION :
                        </p>

                        <p style='margin-bottom: 90px;'>
                            {{ $groupe->description }}
                        </p>

                        <form style="text-align: center; margin-bottom: 10px;" method="post" action="{{ route('groupe.destroy', $groupe->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-primary" value="SUPPRIMER LE GROUPE" />
                        </form>

                    </div>
                    
                    <div style='width: 45%;'>
                        <p style='padding: 5px; font-weight: bold; border-bottom: 2px solid black; margin-bottom: 122px;'>
                            NOMBRE DE PLACES : {{ $groupe->places }}
                        </p>

                        <form style="text-align: center; margin-bottom: 10px;" method="" action="">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-primary" value="AJOUTER" />
                        </form>

                    </div>
                </div>

            </div>
            <br>
        @endforeach
    </ul>

@endsection
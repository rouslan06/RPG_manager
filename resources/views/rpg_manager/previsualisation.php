@extends('menu')

@section('title', 'Connexion')

@section('content')

    <h1 style='margin-top: 30px; margin-bottom: 30px;'>CREEZ VOTRE PERSONNAGE | PREVISUALISATION</h1>

    <ul style='margin-left: -32px;'>
        @foreach($personnages as $personnage)
            <div style='
                border: 2px solid black;
                border-radius: 5px;
            '>

                <p style='font-weight: bold; border-bottom: 2px solid black; padding: 5px; margin-bottom: 0px;'>
                    Nom du personnage : {{ $personnage->nom }}
                </p>

                <div style='display: flex; flex-direction: row;'>
                    <div style='padding: 5px; width: 55%; border-right: 2px solid black;'>

                        <p style='font-weight: bold;'>
                            DESCRIPTION :
                        </p>

                        <p style='margin-bottom: 170px;'>
                            {{ $personnage->description }}
                        </p>

                        <form style="text-align: center;" method="post" action="{{ route('personnage.destroy', $personnage->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-primary" value="SUPPRIMER LE PERSONNAGE" />
                        </form>

                    </div>
                    
                    <div style='padding-left: 10px;'>
                        <p style='padding: 5px; font-weight: bold;'>
                            SPECIALITE : {{ $personnage->specialite }}
                        </p>

                        <p style='padding: 5px;'>
                            Magie : {{ $personnage->magie }} / 99
                        </p>

                        <p style='padding: 5px;'>
                            Force : {{ $personnage->force }} / 99
                        </p>

                        <p style='padding: 5px;'>
                            Agilité : {{ $personnage->agilite }} / 99
                        </p>

                        <p style='padding: 5px;'>
                            Intelligence : {{ $personnage->intelligence }} / 99
                        </p>

                        <p style='padding: 5px;'>
                            PV : {{ $personnage->PV }} / 50
                        </p>
                    </div>
                </div>

            </div>
            <br>
        @endforeach
    </ul>

@endsection
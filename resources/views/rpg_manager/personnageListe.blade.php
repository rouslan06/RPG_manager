@extends('menu')

@section('title', 'Connexion')

@section('content')

    <h1 style='margin-top: 30px; margin-bottom: 30px;'>LES PERSONNAGES</h1>

    <ul style='margin-left: -32px; display: flex; flex-direction: column-reverse;'>
        @foreach($personnages as $personnage)
            <div style='
                border: 2px solid black;
                border-radius: 5px;'
                onmouseover="this.style.border='2px solid red';" 
                onmouseout="this.style.border='2px solid black';">

                <p 
                    style='font-weight: bold; border-bottom: 2px solid black; padding: 5px; margin-bottom: 0px; background-color: grey;'>
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
                        
                        <div style='display: flex; margin-bottom: 10px; width: 100%;'>
                            <div style='display: flex; margin-left: auto; margin-right: auto;'>
                                <form style="text-align: center; margin-right: 10px;" method="get" action="{{ route('personnage.modification', $personnage->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-primary" value="MODIFIER" />
                                </form>

                                <form style="text-align: center;" method="post" action="{{ route('personnage.destroy', $personnage->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-primary" value="SUPPRIMER" />
                                </form>
                            </div>
                        </div>

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
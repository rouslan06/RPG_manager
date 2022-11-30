@extends('menu')

@section('title', 'Deconnexion')

@section('content')

    <h1 style='margin-top: 30px; margin-bottom: 30px;'>GESTION DU COMPTE</h1>

    <br> 

    <div style="display:flex;">
        <div id="BLOC_GAUCHE" style="margin-right:30px;">
            <img class='photoCenter' style='width:145px;' style='height:145px;' src='https://soccerpointeclaire.com/wp-content/uploads/2021/06/default-profile-pic-e1513291410505.jpg'/>
        </div>

        <div id="BLOC_DROITE">
            @if( auth()->check() )
                <div style="display:flex;">
                    <p style="font-weight:bold;">Votre pseudo -</p>
                    <p style="color:purple;">{{ auth()->user()->pseudo }}</p>
                </div>

                <div style="display:flex;">
                    <p style="font-weight:bold;">Nom - </p>
                    <p style="color:purple;">{{ auth()->user()->nom }}</p>
                </div>
                
                <div style="display:flex;">
                    <p style="font-weight:bold;">Prénom - </p>
                    <p style="color:purple;">{{ auth()->user()->prenom }}</p>
                </div>

                <div style="display:flex;">
                    <p style="font-weight:bold;">Email - </p>
                    <p style="color:purple;">{{ auth()->user()->email }}</p>
                </div>
            @endif
        </div>
    </div>

    <br> <br>
        
    <div style="display:flex;">
        <a href="{{ route('log.out') }}" class="btn btn-primary">Deconnexion</a>

        @foreach( $comptes as $compte )
            <form method="post" action="{{ route('compte.destroy', $compte->id) }}">
                @csrf
                @method('DELETE')
                <input style="margin-left:5px;" type="submit" class="btn btn-primary" value="Supprimer le compte" />
            </form>
        @endforeach
    </div>

@endsection
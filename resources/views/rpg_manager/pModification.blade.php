@extends('menu')

@section('title', 'Connexion')

@section('content')

    <h1 style='margin-top: 30px; margin-bottom: 30px;'>MODIFICATION DU PERSONNAGE</h1>

    <ul style='margin-left: -32px; display: flex; flex-direction: column-reverse;'>

        <div style='
            border: 2px solid black;
            border-radius: 5px;'
            onmouseover="this.style.border='2px solid red';" 
            onmouseout="this.style.border='2px solid black';">

            <div style='display: flex; background-color: grey; border-bottom: 2px solid black;'> 
                <p style='font-weight: bold; padding: 5px; margin-bottom: 0px;'>Nom du personnage : </p>
                
                <div class="mb-3">
                    <div class="input-group has-validation">
                        <input type="text" value="{{ old('nom') }}" class="form-control @if($errors->has('no')) is-invalid @endif" name="nom" id="nom" placeholder="Nouveau nom" 
                        style='height: 27px; margin-bottom: -15px; margin-top: 3px;'/>

                        @if($errors->has('description'))
                            <div class="invalid-feedback">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div style='display: flex; flex-direction: row;'>
                <div style='padding: 5px; width: 55%; border-right: 2px solid black;'>

                    <p style='font-weight: bold;'>
                        DESCRIPTION :
                    </p>

                    <div class="mb-3">
                        <div class="input-group has-validation">
                            <input type="text" value="{{ old('nom') }}" class="form-control @if($errors->has('no')) is-invalid @endif" name="nom" id="nom" placeholder="Nouvelle déscription" 
                            style='height: 133px; margin-bottom: 45px;'/>

                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div style='display: flex; width: 100%;'>
                        <div style='display: flex; margin-left: auto; margin-right: auto;'>
                            <a href="{{ route('personnage.liste') }}" class="btn btn-primary" style='margin-right: 10px;'>RETOUR</a>

                            <form style="" method="get" action="">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-primary" value="CONFIRMER" />
                            </form>
                        </div>
                    </div>

                </div>
                
                <div style='padding-left: 10px;'>
                    <p style='padding: 5px; font-weight: bold;'>
                        SPECIALITE : 
                    </p>

                    <p style='padding: 5px;'>
                        Magie :  / 99
                    </p>

                    <p style='padding: 5px;'>
                        Force :  / 99
                    </p>

                    <p style='padding: 5px;'>
                        Agilité :  / 99
                    </p>

                    <p style='padding: 5px;'>
                        Intelligence :  / 99
                    </p>

                    <p style='padding: 5px;'>
                        PV :  / 50
                    </p>
                </div>
            </div>
        </div>
        <br>
    </ul>

@endsection